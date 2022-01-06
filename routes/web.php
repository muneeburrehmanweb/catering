<?php

use Illuminate\Support\Facades\Route;

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
Route::get('clear-cache',function(){
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    dd('cache clear');
});
/*Route::get('/', function () {
    return view('project_panel.panel_pages.dashboard');
});*/

//Route::get('/home', function () {
//    return view('dashboard');
//})->middleware(['auth','verified'])->name('dashboard');


Route::get('/',[App\Http\Controllers\project_website\WebsiteController::class,'Landing'])->name('landing');
Route::get('/faq', function () {
    return view('project_website.website_pages.faq');
})->name('faq');
//Route::get('/service_details', function () {
//    return view('project_website.website_pages.service_details');
//})->name('service_details');

Route::get('/dashboard', function () {
    return view('project_panel.panel_pages.dashboard');
})->middleware(['auth','verified'])->name('dashboard');
//website Route Starts
Route::get('/service_details/{id}',[\App\Http\Controllers\project_website\WebsiteController::class,'ServiceDetail'])->name('service_details');
Route::get('/checkout/{id}',[\App\Http\Controllers\project_website\WebsiteController::class,'CheckOut'])->name('checkout');
Route::post('/submit_order',[\App\Http\Controllers\project_website\WebsiteController::class,'SubmitOrder'])->name('submit_order');
Route::get('/shop/{id}',[\App\Http\Controllers\project_website\WebsiteController::class,'ShopServices'])->name('shop');
Route::get('/services_page',[\App\Http\Controllers\project_website\WebsiteController::class,'ServicePage'])->name('services_page');
//website Route Ends
//Services Route Starts
Route::get('add_services',[App\Http\Controllers\project_panel\ServicesController::class,'AddService'])->name('add_services');
Route::post('submit_service',[App\Http\Controllers\project_panel\ServicesController::class,'SubmitService'])->name('submit_service');
Route::get('show_services',[App\Http\Controllers\project_panel\ServicesController::class,'ShowService'])->name('show_services');
Route::get('edit_services/{id}',[App\Http\Controllers\project_panel\ServicesController::class,'EditService'])->name('edit_services');
Route::post('update_services/{id}',[App\Http\Controllers\project_panel\ServicesController::class,'UpdateService'])->name('update_services');
Route::get('del_services/{id}',[App\Http\Controllers\project_panel\ServicesController::class,'DelService'])->name('del_services');
Route::get('category',[App\Http\Controllers\project_panel\ServicesController::class,'ServiceCategory'])->name('category');
Route::post('submit_category',[App\Http\Controllers\project_panel\ServicesController::class,'SubmitCategory'])->name('submit_category');
Route::get('del_category/{id}',[App\Http\Controllers\project_panel\ServicesController::class,'DelCategory'])->name('del_category');

//Services Route Ends
//Orders Route Starts
Route::get('pending_orders',[App\Http\Controllers\project_panel\ServicesController::class,'PendingOrders'])->name('pending_orders');
//Orders Route Ends
//Profile Routes Starts
Route::get('/profile',[App\Http\Controllers\project_panel\ProfileController::class,'Profile'])->name('profile');
Route::post('/update_profile',[App\Http\Controllers\project_panel\ProfileController::class,'UpdateProfile'])->name('update_profile');
//Profile Routes Ends

require __DIR__.'/auth.php';
