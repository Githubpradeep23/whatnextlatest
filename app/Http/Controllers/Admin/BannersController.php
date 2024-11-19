<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Title = "Banner List";
        $BannerList = Banner::where('del', 0)->orderBy('order_by')->paginate(10);
        return view('admin.banner.bannerlist', compact('BannerList','Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Title = "Add New Banner";
        return view('admin.banner.createnewbanner', compact('Title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $Banner = new Banner;
        $Banner->title = $request->input('title');
        $Banner->order_by = $request->input('order_by');
        $Banner->short_description = $request->input('short_description');
        $Banner->img_title = $request->input('img_title');
        $Banner->img_alt = $request->input('img_alt');
    	// $Banner->slug = SlugService::createSlug(Banner::class, 'slug', $request->title);
        $Banner->created_at = Carbon::now();
        if ($request->hasfile('image')) {
        	$file = $request->file('image');
        	$extension = $file->getClientOriginalExtension(); //getting image extension
        	$filename = time() . '.' . $extension;
            $file->move(public_path('banner/') , $filename);
    	    $Banner->image = $filename;
        }else{
        	$Banner->image = null;
        }
    	$Banner->save();
        return redirect('admin/banner')->with('msg', 'Your banner has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
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
        $Title = "Edit Banner";
        $EditSlug = Banner::where(['del' => 0, 'id' => $id])->first();
        if (!$EditSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $EditBanner = Banner::where('id', $id)->first();
        return view('admin.banner.editbanner', compact('EditBanner','Title'));
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

        if ($request->hasfile('image')) {
        	$file = $request->file('image');
        	$extension = $file->getClientOriginalExtension(); //getting image extension
        	$filename = time() . '.' . $extension;
            $file->move(public_path('banner/') , $filename);
    	    // $Updbanner->image = $filename;
        }else{
        	$filename = $request->input('old_image');
        }

        Banner::where('id', $id)->update([
            'title' => $request->input('title'),
            'order_by' => $request->input('order_by'),
            'short_description' => $request->input('short_description'),
            'img_title' => $request->input('img_title'),
            'img_alt' => $request->input('img_alt'),
            // 'slug' => SlugService::createSlug(Banner::class, 'slug', $request->title),
            'image' => $filename,
        ]);

        return redirect('admin/banner')->with('msg', 'Your banner has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $delSlug = Banner::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $Banner = Banner::where('id', $id)->update(['del' => 1]);
        return redirect('admin/banner')->with('errormsg', 'Your banner has been deleted successfully!');
    }

    public function bannerstatus(Request $request)
    {
        $data = $request->all();
        Banner::where(['id' => $data['id']])->update(['status' => $data['status']]);
    }


}
