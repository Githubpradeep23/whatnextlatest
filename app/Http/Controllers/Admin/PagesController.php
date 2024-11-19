<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Models\PageEntry;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $Title = "About List";
            $PageTitle = "About";
            $pageId = "pagesid=about";
            $pagesList = Page::where('page', 1)->orderBy('type', 'ASC')->get();
            return view('admin.pages.pageslist', compact('pagesList', 'Title', 'pageId', 'PageTitle'));
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $Title = "Clients We Cater List";
            $PageTitle = "Clients We Cater";
            $pageId = "pagesid=clientswecater";
            $pagesList = Page::where('page', 2)->orderBy('type', 'ASC')->get();
            return view('admin.pages.pageslist', compact('pagesList', 'Title', 'pageId', 'PageTitle'));
        }
    }

    public function pagesDetails(Request $request, $pageEditId)
    {
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $Title = "About Content List";
            $PageTitle = "Add New About";
            $pageId = "pagesid=about";
            $pagesEntry = PageEntry::where('page_id', $pageEditId)->orderBy('id', 'DESC')->get();
            return view('admin.pages.pagesdetails', compact('pagesEntry', 'Title','PageTitle','pageId'));
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $Title = "Clients We Cater Content List";
            $PageTitle = "Add New Clients We Cater";
            $pageId = "pagesid=clientswecater";
            $pagesEntry = PageEntry::where('page_id', $pageEditId)->orderBy('id', 'DESC')->get();
            return view('admin.pages.pagesdetails', compact('pagesEntry', 'Title','PageTitle','pageId'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $Title = "Add New About";
            $PageTitle = "About List";
            $pageId = "pagesid=about";
            return view('admin.pages.createnewpages', compact('Title', 'pageId', 'PageTitle'));
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $Title = "Add New Clients We Cater";
            $PageTitle = "Clients We Cater List";
            $pageId = "pagesid=clientswecater";
            return view('admin.pages.createnewpages', compact('Title', 'pageId', 'PageTitle'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $pageId = 1;
            $url = "?pagesid=about";
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $pageId = 2;
            $url = "?pagesid=clientswecater";
        }
        // dd($pageId);

        $request->validate([
            'title' => 'nullable|max:255',
            // 'page' => 'required',
            'short_description' => 'nullable',
            'img_title' => 'nullable|max:255',
            'type' => 'required',
            'img_alt' => 'nullable|max:255',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
        ]);

        $storePages = ['created_at' => Carbon::now(), 'page' => $pageId];
        if (isset($data['title']) && !empty($data['title'])) {
            $storePages['title'] = $data['title'];
            $storePages['slug'] = SlugService::createSlug(Page::class, 'slug', $data['title']);
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $storePages['order_by'] = $data['order_by'];
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $storePages['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $storePages['img_title'] = $data['img_title'];
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $storePages['img_alt'] = $data['img_alt'];
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $storePages['short_description'] = $data['short_description'];
        }
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('pages/'), $filename);
            $storePages['image'] = $filename;
        }
        // dd($data['entries']);
        $storePagesRes = Page::create($storePages);

        if (isset($storePagesRes) && !empty($storePagesRes) && $storePagesRes->id) {
            if (isset($data['entries']) && !empty($data['entries'])) {
                foreach ($data['entries'] as $key => $value) {
                    if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                        $categoryEntry = ['created_at' => Carbon::now(), 'page_id' => $storePagesRes->id];
                        if (isset($value['title']) && !empty($value['title'])) {
                            $categoryEntry['title'] = $value['title'];
                        }
                        if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                            $file = $request->file("entries.$key.image");
                            $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('pages/'), $filename);
                            $categoryEntry['image'] = $filename;
                        }
                        if (isset($value['description']) && !empty($value['description'])) {
                            $categoryEntry['description'] = $value['description'];
                        }
                        $storePagesEntryRes = PageEntry::create($categoryEntry);
                    }
                }
            }
        }

        return redirect('admin/pages' . $url)->with('msg', 'Your record has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $Title = "Edit About";
            $PageTitle = "About List";
            $pageId = "pagesid=about";
            $EditPages = Page::with('entries')->where('id', $id)->first();
            if (!$EditPages) {
                return redirect()->back();
            }
            return view('admin.pages.editpages', compact('EditPages', 'Title', 'PageTitle','pageId'));
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $Title = "Edit Clients We Cater";
            $PageTitle = "Clients We Cater List";
            $pageId = "pagesid=clientswecater";
            $EditPages = Page::with('entries')->where('id', $id)->first();
            if (!$EditPages) {
                return redirect()->back();
            }
            return view('admin.pages.editpages', compact('EditPages', 'Title', 'PageTitle','pageId'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $url = "?pagesid=about";
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $url = "?pagesid=clientswecater";
        }
        $request->validate([
            'title' => 'nullable|max:255',
            'short_description' => 'nullable',
            'img_title' => 'nullable|max:255',
            'img_alt' => 'nullable|max:255',
        ]);

        $updatePages = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $updatePages['title'] = $data['title'];
            $updatePages['slug'] = SlugService::createSlug(Page::class, 'slug', $data['title']);
        } else {
            $updatePages['title'] = '';
            $updatePages['slug'] = '';
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $updatePages['order_by'] = $data['order_by'];
        } else {
            $updatePages['order_by'] = '';
        }
        // if (isset($data['page']) && !empty($data['page'])) {
        //     $updatePages['page'] = $data['page'];
        // }
        if (isset($data['type']) && !empty($data['type'])) {
            $updatePages['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $updatePages['img_title'] = $data['img_title'];
        } else {
            $updatePages['img_title'] = '';
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $updatePages['img_alt'] = $data['img_alt'];
        } else {
            $updatePages['img_alt'] = '';
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $updatePages['short_description'] = $data['short_description'];
        } else {
            $updatePages['short_description'] = '';
        }
        if ($request->hasfile('image')) {

            $request->validate([
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('pages/'), $filename);
            $updatePages['image'] = $filename;
        }

        $updatePagesRes = Page::where('id', $id)->update($updatePages);

        if (isset($data['entries']) && !empty($data['entries'])) {
            foreach ($data['entries'] as $key => $value) {
                if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                    $categoryEntry = ['page_id' => $id,];
                    if (isset($value['title']) && !empty($value['title'])) {
                        $categoryEntry['title'] = $value['title'];
                    }
                    if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                        $file = $request->file("entries.$key.image");
                        $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('pages/'), $filename);
                        $categoryEntry['image'] = $filename;
                    }
                    if (isset($value['description']) && !empty($value['description'])) {
                        $categoryEntry['description'] = $value['description'];
                    }
                    // Update existing entry or create new one
                    if (isset($value['id'])) {
                        $entry = PageEntry::findOrFail($value['id']);
                        $entry->update($categoryEntry);
                    } else {
                        PageEntry::create($categoryEntry);
                    }
                }
            }
        }
        return redirect('admin/pages'. $url)->with('msg', 'Your record has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->has('pagesid') && $request->query('pagesid') == 'about') {
            $url = "?pagesid=about";
        } elseif ($request->has('pagesid') && $request->query('pagesid') == 'clientswecater') {
            $url = "?pagesid=clientswecater";
        }

        $delSlug = Page::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $Service = Page::where('id', $id)->update(['del' => 1]);
        PageEntry::where('page_id', $id)->update(['del' => 1]);
        return redirect('admin/pages'.$url)->with('errormsg', 'Your record has been deleted successfully!');
    }

    public function destroyPagesDetail(Request $request, $id)
    {
        $delSlug = PageEntry::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back();
        }
        PageEntry::where('id', $id)->update(['del' => 1]);
        return redirect()->back()->with('errormsg', 'Your record has been deleted successfully!');
    }
}
