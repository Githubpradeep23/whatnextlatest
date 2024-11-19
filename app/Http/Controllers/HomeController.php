<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Home()
    {
        $BannersList = Banner::where(['status' => 0])->orderBy('order_by')->get();
        $categorySectionOne = Category::with('entries')->where(['status' => 0, 'type' => 1])->first();
        $categorySectionTwo = Category::with('entries')->where(['status' => 0, 'type' => 2])->first();
        $categorySectionThree = Category::with('entries')->where(['status' => 0, 'type' => 3])->first();
        $categorySectionFour = Category::with('entries')->where(['status' => 0, 'type' => 4])->first();
        $categorySectionFive = Category::with('entries')->where(['status' => 0, 'type' => 5])->first();
        $categorySectionSix = Category::with('entries')->where(['status' => 0, 'type' => 6])->first();
        $categorySectionSeven = Category::with('entries')->where(['status' => 0, 'type' => 7])->first();
        $categorySectionEight = Category::with('entries')->where(['status' => 0, 'type' => 8])->first();
        $categorySectionNingth = Category::with('entries')->where(['status' => 0, 'type' => 9])->first();
        $categorySectionTenght = Category::with('entries')->where(['status' => 0, 'type' => 10])->first();
        $categorySectionEleven = Category::with('entries')->where(['status' => 0, 'type' => 11])->first();
        return view('home', compact(
            'BannersList',
            'categorySectionOne',
            'categorySectionTwo',
            'categorySectionThree',
            'categorySectionFour',
            'categorySectionFive',
            'categorySectionSix',
            'categorySectionSeven',
            'categorySectionEight',
            'categorySectionNingth',
            'categorySectionTenght',
            'categorySectionEleven'
        ));
    }
}
