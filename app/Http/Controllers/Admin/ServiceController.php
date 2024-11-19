<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceEntry;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Title = "Service List";
        $ServiceList = Service::orderBy('type','ASC')->paginate(10);
        return view('admin.services.servicelist', compact('ServiceList', 'Title'));
    }

    public function serviceDetails(Request $request, $serviceId)
    {
        $Title = "Service Content Details";
        $servicesEntry = ServiceEntry::where('service_id', $serviceId)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.services.servicesdetails', compact('servicesEntry', 'Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Title = "Add New Service";
        return view('admin.services.createnewservice', compact('Title'));
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

        $storeService = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeService['title'] = $data['title'];
            $storeService['slug'] = SlugService::createSlug(Service::class, 'slug', $data['title']);
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $storeService['order_by'] = $data['order_by'];
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $storeService['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $storeService['img_title'] = $data['img_title'];
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $storeService['img_alt'] = $data['img_alt'];
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $storeService['short_description'] = $data['short_description'];
        }
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('service/'), $filename);
            $storeService['image'] = $filename;
        }
        // dd($data['entries']);
        $storeServiceRes = Service::create($storeService);

        if (isset($storeServiceRes) && !empty($storeServiceRes) && $storeServiceRes->id) {
            if (isset($data['entries']) && !empty($data['entries'])) {
                foreach ($data['entries'] as $key => $value) {
                    if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                        $categoryEntry = ['created_at' => Carbon::now(), 'service_id' => $storeServiceRes->id];
                        if (isset($value['title']) && !empty($value['title'])) {
                            $categoryEntry['title'] = $value['title'];
                        }
                        if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                            $file = $request->file("entries.$key.image");
                            $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('service/'), $filename);
                            $categoryEntry['image'] = $filename;
                        }
                        if (isset($value['description']) && !empty($value['description'])) {
                            $categoryEntry['description'] = $value['description'];
                        }
                        $storeServiceEntryRes = ServiceEntry::create($categoryEntry);
                    }
                }
            }
        }

        return redirect('admin/service')->with('msg', 'Your service has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
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
        $Title = "Edit Service Content";
        $EditService = Service::with('entries')->where('id', $id)->first();
        if (!$EditService) {
            return redirect()->back();
        }
        return view('admin.services.editservice', compact('EditService', 'Title'));
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
        $request->validate([
            'title' => 'nullable|max:255',
            'short_description' => 'nullable',
            'img_title' => 'nullable|max:255',
            'img_alt' => 'nullable|max:255',
        ]);

        $storeService = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeService['title'] = $data['title'];
            $storeService['slug'] = SlugService::createSlug(Service::class, 'slug', $data['title']);
        } else {
            $storeService['title'] = '';
            $storeService['slug'] = '';
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $storeService['order_by'] = $data['order_by'];
        } else {
            $storeService['order_by'] = '';
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $storeService['type'] = $data['type'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $storeService['img_title'] = $data['img_title'];
        } else {
            $storeService['img_title'] = '';
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $storeService['img_alt'] = $data['img_alt'];
        } else {
            $storeService['img_alt'] = '';
        }
        if (isset($data['short_description']) && !empty($data['short_description'])) {
            $storeService['short_description'] = $data['short_description'];
        } else {
            $storeService['short_description'] = '';
        }
        if ($request->hasfile('image')) {

            $request->validate([
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('service/'), $filename);
            $storeService['image'] = $filename;
        }

        $storeServiceRes = Service::where('id', $id)->update($storeService);

        if (isset($data['entries']) && !empty($data['entries'])) {
            foreach ($data['entries'] as $key => $value) {
                if (!empty($value['title']) || $request->hasFile("entries.$key.image") || !empty($value['description'])) {

                    $categoryEntry = ['service_id' => $id,];
                    if (isset($value['title']) && !empty($value['title'])) {
                        $categoryEntry['title'] = $value['title'];
                    }
                    if (isset($value['image']) && $request->hasFile("entries.$key.image")) {
                        $file = $request->file("entries.$key.image");
                        $filename = time() . '-' . $key . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('service/'), $filename);
                        $categoryEntry['image'] = $filename;
                    }
                    if (isset($value['description']) && !empty($value['description'])) {
                        $categoryEntry['description'] = $value['description'];
                    }
                    // Update existing entry or create new one
                    if (isset($value['id'])) {
                        $entry = ServiceEntry::findOrFail($value['id']);
                        $entry->update($categoryEntry);
                    } else {
                        ServiceEntry::create($categoryEntry);
                    }
                }
            }
        }
        return redirect('admin/service')->with('msg', 'Your service has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $delSlug = Service::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $Service = Service::where('id', $id)->update(['del' => 1]);
        ServiceEntry::where('service_id', $id)->update(['del' => 1]);
        return redirect('admin/service')->with('errormsg', 'Your service has been deleted successfully!');
    }

    public function destroyServiceDetail(Request $request, $id)
    {
        $delSlug = ServiceEntry::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back();
        }
        ServiceEntry::where('id', $id)->update(['del' => 1]);
        return redirect()->back()->with('errormsg', 'Your service content has been deleted successfully!');
    }

    public function serviceStatus(Request $request)
    {
        $data = $request->all();
        Service::where(['id' => $data['id']])->update(['status' => $data['status']]);
    }
}
