<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Service;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
  public function aboutUs()
  {
    $Title = "About Us";
    $BannersList = Banner::where(['status' => 0])->orderBy('order_by')->get();
    $galleryList = Gallery::where(['status' => 0])->get();
    $pagesSectionOne = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 1])->first();
    $pagesSectionTwo = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 2])->first();
    $pagesSectionThree = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 3])->first();
    $pagesSectionFour = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 4])->first();
    $pagesSectionFive = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 5])->first();
    $pagesSectionSix = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 6])->first();
    $pagesSectionSeven = Page::with('entries')->where(['page'=>1 ,'status' => 0, 'type' => 7])->first();
    $pagesSectionEight = Page::with('entries')->where(['page' => 1, 'status' => 0, 'type' => 8])->first();
    $pagesSectionNine = Page::with('entries')->where(['page' => 1, 'status' => 0, 'type' => 9])->first();
    $pagesSectionTenth = Page::with('entries')->where(['page' => 1, 'status' => 0, 'type' => 10])->first();
    $pagesSectionEleventh = Page::with('entries')->where(['page' => 1, 'status' => 0, 'type' => 11])->first();
    $pagesSectionTowelth = Page::with('entries')->where(['page' => 1, 'status' => 0, 'type' => 12])->first();
    return view('users.pages.aboutus', compact('BannersList','galleryList','pagesSectionOne','pagesSectionTwo','pagesSectionThree',
                'pagesSectionFour','pagesSectionFive','pagesSectionSix','pagesSectionSeven','pagesSectionEight','pagesSectionNine'
                ,'pagesSectionTenth','pagesSectionEleventh','pagesSectionTowelth','Title'));
  }

  public function servicesPage()
  {
    $Title = "Services";
    $galleryList = Gallery::where(['status' => 0])->get();
    $serviceSectionOne = Service::with('entries')->where(['status' => 0, 'type' => 1])->first();
    $serviceSectionTwo = Service::with('entries')->where(['status' => 0, 'type' => 2])->first();
    $serviceSectionThree = Service::with('entries')->where(['status' => 0, 'type' => 3])->first();
    $serviceSectionFour = Service::with('entries')->where(['status' => 0, 'type' => 4])->first();
    $serviceSectionFive = Service::with('entries')->where(['status' => 0, 'type' => 5])->first();
    $serviceSectionSix = Service::with('entries')->where(['status' => 0, 'type' => 6])->first();
    $serviceSectionSeven = Service::with('entries')->where(['status' => 0, 'type' => 7])->first();
    return view('users.pages.services', compact('galleryList','serviceSectionOne','serviceSectionTwo','serviceSectionThree',
                'serviceSectionFour','serviceSectionFive','serviceSectionSix','serviceSectionSeven','Title'));
  }

    public function clientsWeCater()
  {
    $Title = "Clients We Cater";
    $galleryList = Gallery::where(['status' => 0])->get();
    $pagesSectionOne = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 1])->first();
    $pagesSectionTwo = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 2])->first();
    $pagesSectionThree = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 3])->first();
    $pagesSectionFour = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 4])->first();
    $pagesSectionFive = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 5])->first();
    $pagesSectionSix = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 6])->first();
    $pagesSectionSeven = Page::with('entries')->where(['page'=>2 ,'status' => 0, 'type' => 7])->first();
    $pagesSectionEight = Page::with('entries')->where(['page'=>2, 'status' => 0, 'type' => 8])->first();
    $pagesSectionNine = Page::with('entries')->where(['page'=>2, 'status' => 0, 'type' => 9])->first();
    $pagesSectionTenth = Page::with('entries')->where(['page'=>2, 'status' => 0, 'type' => 10])->first();
    $pagesSectionEleventh = Page::with('entries')->where(['page'=>2, 'status' => 0, 'type' => 11])->first();
    return view('users.pages.clientswecater', compact('galleryList','pagesSectionOne','pagesSectionTwo','pagesSectionThree',
                'pagesSectionFour','pagesSectionFive','pagesSectionSix','pagesSectionSeven','pagesSectionEight','pagesSectionNine'
                ,'pagesSectionTenth','pagesSectionEleventh','Title'));
  }

  public function contactUs(Request $request){
    $Title = "Contact Us";
    $data = $request->all();
    if ($request->isMethod('post')) {
      $validator = Validator::make($data, [
        'name' => 'required|string|max:50',
        'email' => 'required|email|max:30',
        'mobile' => 'required|digits:10',
      ]);

      // Check if validation fails
      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }

      $storeContactData = ['created_at' => Carbon::now(), 'mode' => 'Online'];

      if (isset($data['name']) && !empty($data['name'])) {
        $storeContactData['name'] = $data['name'];
      }
      if (isset($data['email']) && !empty($data['email'])) {
        $storeContactData['email'] = $data['email'];
      }
      if (isset($data['mobile']) && !empty($data['mobile'])) {
        $storeContactData['mobile'] = $data['mobile'];
      }
      if (isset($data['message']) && !empty($data['message'])) {
        $storeContactData['message'] = $data['message'];
      }

      $storeContactDataRes = Appointment::create($storeContactData);
      if ($storeContactDataRes) {
        return redirect()->back()->with('msg', 'Your request has been received, we will contact you soon.');
      } else {
        return redirect()->back()->with('errormsg', 'Your request has not been received, you can reschedule.');
      }
    }
     return view('users.pages.contacts', compact('Title'));
  }


}
