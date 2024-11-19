<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Title = "Location List";
        $locationsList = Location::orderBy('id', 'DESC')->paginate(10);
        return view('admin.Location.locationslist', compact('locationsList', 'Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Title = "Add New Location";
        return view('admin.Location.createnewtimeslot', compact('Title'));
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
        $request->validate(['title' => 'required|max:50'
        ]);
        $storeTimeSlot = ['created_at' => Carbon::now()];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeTimeSlot['title'] = $data['title'];
        }
        Location::create($storeTimeSlot);
        return redirect('admin/locations')->with('msg', 'Your location has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Location $document)
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
        $editLocation = Location::where(['id' => $id])->first();
        if (!$editLocation) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $Title = "Edit Location";
        $locationsList = Location::orderBy('id', 'DESC')->paginate(10);
        return view('admin.Location.editlocations', compact('editLocation', 'locationsList', 'Title'));
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
            'title' => 'nullable|max:50'
        ]);
        $storeLocation = [];
        if (isset($data['title']) && !empty($data['title'])) {
            $storeLocation['title'] = $data['title'];
        }
        Location::where('id', $id)->update($storeLocation);
        return redirect('admin/locations')->with('msg', 'Your location has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $delSlug = Location::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        Location::where('id', $id)->delete();
        return redirect('admin/locations')->with('errormsg', 'Your location has been deleted successfully!');
    }

    // public function departmentStatus(Request $request)
    // {
    //     $data = $request->all();
    //     Location::where(['id' => $data['id']])->update(['status' => $data['status']]);
    // }

}
