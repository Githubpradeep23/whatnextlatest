<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Service;
use App\Models\SettingsModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException; //Import exception.



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Paginator::useBootstrap();
        //  Paginator::defaultView('default');

        //  Paginator::defaultSimpleView('ecommerce-pagination');

        View::composer(['layouts.navigation', 'layouts.footer', 'layouts.app', 'layouts.admin', 'admin.login'], function ($view) {

            // Start Settings Query
            $Settings = SettingsModel::where(['status' => 0])->first();
            $galleryList = Gallery::where(['status' => 0,'type'=>1])->limit(10)->get();
            // End Settings Query 

            $view->with(compact('galleryList', 'Settings'));
        });
    }
}
