<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('Admin',[ProductController::class,'index']);
Route::get('Admin/add',[ProductController::class,'Admin_add_page']);
Route::post('Admin/add',[ProductController::class,'create_pro']);
Route::get('Admin/{id}/update',[ProductController::class,'Admin_upd_page']);
Route::get('Admin/{id}/delete',[ProductController::class,'Admin_del_page']);
Route::get('Admin/view',[ProductController::class,'Admin_view_page']);
Route::get('Admin/orders',[ProductController::class,'Admin_view_orders']);
Route::put('Admin/{id}/update',[ProductController::class,'Admin_update_page']);
Route::get('/search', [ProductController::class, 'search']);


Route::controller(WebController::class)->group(function(){
    Route::get('/', 'home'); 
    Route::get('/shop', 'shop'); 
    Route::get('/contact', 'contact'); 
    Route::get('/about', 'about'); 
    Route::get('/bundles', 'bundles'); 
    Route::get('/essentials', 'essentials'); 
    Route::get('/discounts', 'discounts'); 
    Route::get('/productdetails', 'productdetails'); 
    Route::get('/sunscreen', 'sunscreen');
    Route::get('/moisturizers', 'moisturizers');
    Route::get('/gelcleanser', 'gelcleanser');
    Route::get('/serums', 'serums');
    Route::get('/vitc', 'vitc');
    Route::get('/liptreatment', 'liptreatment');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Admin', function () {
    return view('admin.Admin-opt-page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';