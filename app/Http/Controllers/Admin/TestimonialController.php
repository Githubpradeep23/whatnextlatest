<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Http\Requests\TestimonialRequest;
use App\Models\Plan;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Title = "Plan Testimonial";
        $PlanList = Testimonial::where('del', 0)->orderBy('order_by')->paginate(10);
        return view('admin.testimonial.testimoniallist', compact('PlanList', 'Title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Title = "Add New Testimonial";
        return view('admin.testimonial.createnewtestimonial', compact('Title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $data = $request->all();

        $testimonialCreate = ['created_at'=>Carbon::now()];

        if (isset($data['title']) && !empty($data['title'])) {
            $testimonialCreate['title'] = $data['title'];
            $testimonialCreate['slug'] = SlugService::createSlug(Testimonial::class, 'slug', $request->title);
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $testimonialCreate['type'] = $data['type'];
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $testimonialCreate['order_by'] = $data['order_by'];
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $testimonialCreate['description'] = $data['description'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $testimonialCreate['img_title'] = $data['img_title'];
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $testimonialCreate['img_alt'] = $data['img_alt'];
        }

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('testimonial/'), $filename);
            $testimonialCreate['image'] = $filename;
        }

        Testimonial::create($testimonialCreate);

        return redirect('admin/testimonial')->with('msg', 'Your testimonial has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $Plan
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $Plan)
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
        $Title = "Edit Testimonial";
        $EditSlug = Testimonial::where(['del' => 0, 'id' => $id])->first();
        if (!$EditSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $EditTestimonial = Testimonial::where('id', $id)->first();
        return view('admin.testimonial.edittestimonial', compact('EditTestimonial', 'Title'));
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

        $testimonialUpd = [];

        if (isset($data['title']) && !empty($data['title'])) {
            $testimonialUpd['title'] = $data['title'];
            $testimonialUpd['slug'] = SlugService::createSlug(Testimonial::class, 'slug', $request->title);
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $testimonialUpd['type'] = $data['type'];
        }
        if (isset($data['order_by']) && !empty($data['order_by'])) {
            $testimonialUpd['order_by'] = $data['order_by'];
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $testimonialUpd['description'] = $data['description'];
        }
        if (isset($data['img_title']) && !empty($data['img_title'])) {
            $testimonialUpd['img_title'] = $data['img_title'];
        }
        if (isset($data['img_alt']) && !empty($data['img_alt'])) {
            $testimonialUpd['img_alt'] = $data['img_alt'];
        }

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('testimonial/'), $filename);
            $testimonialUpd['image'] = $filename;
        }

        Testimonial::where('id', $id)->update($testimonialUpd);

        return redirect('admin/testimonial')->with('msg', 'Your testimonial has been update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $delSlug = Testimonial::where(['id' => $id])->first();
        if (!$delSlug) {
            return redirect()->back()->with('errorMsg', 'Record Not Found');
        }
        $Plans = Testimonial::where('id', $id)->update(['del' => 1]);
        return redirect('admin/testimonial')->with('errormsg', 'Your testimonial has been deleted successfully!');
    }

    public function testimonialstatus(Request $request)
    {
        $data = $request->all();
        Testimonial::where(['id' => $data['id']])->update(['status' => $data['status']]);
    }
}
