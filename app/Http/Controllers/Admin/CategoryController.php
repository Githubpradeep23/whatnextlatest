<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryEntry;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Title = "Home Content List";
        $CategoryList = Category::where('del', 0)->orderBy('type', 'ASC')->paginate(10);
        return view('admin.category.categorylist', compact('CategoryList', 'Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Title = "Add New Content";
        return view('admin.category.createnewcategory', compact('Title'));
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
        $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'nullable',
            'img_title' => 'nullable|max:255',
            'type' => 'required',
            'img_alt' => 'nullable|max:255',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
        ]);

        $storeCategory = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeCategory['title'] = $data['title'];
            $storeCategory['slug'] = SlugService::createSlug(Category::class, 'slug', $data['title']);
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $storeCategory['order_by'] = $data['order_by'];
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $storeCategory['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $storeCategory['img_title'] = $data['img_title'];
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $storeCategory['img_alt'] = $data['img_alt'];
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $storeCategory['short_description'] = $data['short_description'];
        }
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('category/'), $filename);
            $storeCategory['image'] = $filename;
        }
        // dd($data['entries']);
        $storeCategoryRes = Category::create($storeCategory);

        if (isset($storeCategoryRes) && !empty($storeCategoryRes) && $storeCategoryRes->id) {
            if (isset($data['entries']) && !empty($data['entries'])) {
                foreach ($data['entries'] as $key => $value) {
                    if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                        $categoryEntry = ['created_at' => Carbon::now(), 'category_id' => $storeCategoryRes->id];
                        if (isset($value['title']) && !empty($value['title'])) {
                            $categoryEntry['title'] = $value['title'];
                        }
                        if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                            $file = $request->file("entries.$key.image");
                            $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('category/'), $filename);
                            $categoryEntry['image'] = $filename;
                        }
                        if (isset($value['description']) && !empty($value['description'])) {
                            $categoryEntry['description'] = $value['description'];
                        }
                        $storeCategoryEntryRes = CategoryEntry::create($categoryEntry);
                    }
                }
            }
        }

        return redirect('admin/category')->with('msg', 'Your home content has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Category $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $Title = "Edit Home Content";
        $EditCategory = Category::with('entries')->where(['id' => $id])->first();
        if (!$EditCategory) {
            return redirect()->back();
        }
        return view('admin.category.editcategory', compact('EditCategory', 'Title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate([
            'title' => 'nullable|max:255',
            'short_description' => 'nullable',
            'img_title' => 'nullable|max:255',
            'img_alt' => 'nullable|max:255',
        ]);

        $storeCategory = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeCategory['title'] = $data['title'];
            $storeCategory['slug'] = SlugService::createSlug(Category::class, 'slug', $data['title']);
        }else {
            $storeCategory['title'] = '';
            $storeCategory['slug'] = '';
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $storeCategory['order_by'] = $data['order_by'];
        }else{
            $storeCategory['order_by'] = '';
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $storeCategory['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $storeCategory['img_title'] = $data['img_title'];
        }else {
            $storeCategory['img_title'] = '';
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $storeCategory['img_alt'] = $data['img_alt'];
        }else {
            $storeCategory['img_alt'] = '';
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $storeCategory['short_description'] = $data['short_description'];
        }else {
            $storeCategory['short_description'] = '';
        }
        if ($request->hasfile('image')) {

            $request->validate([
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('category/'), $filename);
            $storeCategory['image'] = $filename;
        }
        // dd($data['entries']);
        $storeCategoryRes = Category::where('id',$id)->update($storeCategory);

        if (isset($data['entries']) && !empty($data['entries'])) {
            foreach ($data['entries'] as $key => $value) {
                if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                    $categoryEntry = ['category_id' => $id,];
                    if (isset($value['title']) && !empty($value['title'])) {
                        $categoryEntry['title'] = $value['title'];
                    }
                    if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                        $file = $request->file("entries.$key.image");
                        $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('category/'), $filename);
                        $categoryEntry['image'] = $filename;
                    }
                    if (isset($value['description']) && !empty($value['description'])) {
                        $categoryEntry['description'] = $value['description'];
                    }
                    // Update existing entry or create new one
                    if (isset($value['id'])) {
                        $entry = CategoryEntry::findOrFail($value['id']);
                        $entry->update($categoryEntry);
                    } else {
                        CategoryEntry::create($categoryEntry);
                    }
                    // $storeCategoryEntryRes = CategoryEntry::create($categoryEntry);
                }
            }
        }
        return redirect('admin/category')->with('msg', 'Your home content has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $delSlug = Category::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back();
        }
        Category::where('id', $id)->update(['del' => 1]);
        CategoryEntry::where('category_id', $id)->update(['del' => 1]);
        return redirect('admin/category')->with('errormsg', 'Your home content has been deleted successfully!');
    }

    public function destroyCategoryDetail(Request $request, $id)
    {
        $delSlug = CategoryEntry::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back();
        }
        CategoryEntry::where('id', $id)->update(['del' => 1]);
        return redirect()->back()->with('errormsg', 'Your home content has been deleted successfully!');
    }

    public function categoyDetails(Request $request, $catId)
    {
        $Title = "Home Content Details";
        $CategoryEntry = CategoryEntry::where('category_id', $catId)->orderBy('id','DESC')->paginate(10);
        return view('admin.category.categorydetails', compact('CategoryEntry', 'Title'));
    }

    public function Categorystatus(Request $request)
    {
        $data = $request->all();
        Category::where(['id' => $data['id']])->update(['status' => $data['status']]);
    }

    public function SearchCategory(Request $request)
    {
        $data = $request->all();
        if ($request->ismethod('get')) {

            if (!empty($data['title'])) {
                $title = $data['title'];
            }

            $CategoryList = Category::query();
            if (!empty($title)) {
                $CategoryList = $CategoryList->where('title', 'LIKE', "%{$title}%");
            }

            $CategoryList = $CategoryList->where('del', 0)->paginate(10);
            $CategoryList->appends($request->all());
            $Title = "Home Content List";
            return view('admin.category.categorylist', compact('CategoryList', 'Title'));
        }
    }
}
