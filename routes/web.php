<?php

use App\Http\Controllers\Admin\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\SiteSettingsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Users\PageController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


// Route::get('login', function () {
//     return redirect('/');
// })->name('login');
// Start user auth

Route::get('/', [HomeController::class, 'Home'])->name('home');



// End user auth

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [AdminController::class, 'login'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.home');
        Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password');
        Route::post('update-change-password', [AdminController::class, 'updateChangePass'])->name('update.change.password');

        // Search Category
        Route::get('category/details/{category_id}', [CategoryController::class, 'categoyDetails'])->name('category.details');
        Route::match(['get', 'post'], 'category/details/destroy/{id}', [CategoryController::class, 'destroyCategoryDetail'])->name('category.details.destroy');
        // Search Category

        //   Start Support Route
        Route::get('appointment/list', [UserController::class, 'appointmentList'])->name('appointment.list');
        Route::match(['get', 'post'], 'appointment/export', [UserController::class, 'exportAppoinmentReport'])->name('appointment.export');
        // End Support Route

        // Start Service Route Status Update
        Route::get('service/details/{service_id}', [ServiceController::class, 'serviceDetails'])->name('service.details');
        Route::match(['get', 'post'], 'service/details/destroy/{id}', [ServiceController::class, 'destroyServiceDetail'])->name('service.details.destroy');
        // End Service Route Status Update  

        // Start GalleryController Route Status Update
        Route::post('testimonial/status/update/{id}', [UserController::class, 'appointmentUpdateStatus'])->name('testimonial.status.update');
        // End GalleryController Route Status Update  

        // Start pages Route Status Update  
        Route::get('pages/details/{page_id}', [PagesController::class, 'pagesDetails'])->name('pages.details');
        Route::match(['get', 'post'], 'pages/details/destroy/{id}', [PagesController::class, 'destroyPagesDetail'])->name('pages.details.destroy');
        // End pages Route Status Update  

        Route::resources([
            '/gallery' => GalleryController::class,
            '/category' => CategoryController::class,
            '/service' => ServiceController::class,
            '/testimonial' => TestimonialController::class,
            '/pages' => PagesController::class,
            '/banner' => BannersController::class,
            '/settings' => SiteSettingsController::class,
        ]);


    });
});

// End Admin Route

// Start main PageController Pages Route
Route::get('services', [PageController::class, 'servicesPage'])->name('services');
Route::get('clients-we-cater', [PageController::class, 'clientsWeCater'])->name('clients.we.cater');
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about.us');
Route::match(['get','post'],'contact-us', [PageController::class, 'contactUs'])->name('contact.us');
// End PageController Store Route 