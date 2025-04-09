<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why-choose-cryox', function () {
    return view('why-choose-cryox');
})->name('why-choose-cryox');

Route::get("/about-us", function () {
    return view('about-us');
})->name('about-us');

Route::get("/testimonials", function () {
    return view('testimonials');
})->name('testimonials');

// Route::get('/cryoskin-radiative-cooling-vinyl', 'App\Http\Controllers\ProductController@vinyl')->name('vinyl');
Route::get("/active-cooling-water-based-cryopaint", 'App\Http\Controllers\ProductController@paint')->name('paint');
Route::get("/cooling-pdrc-cryocan-spray", 'App\Http\Controllers\ProductController@spray')->name('spray');
Route::get("/active-cooling-cryopaint-sample", 'App\Http\Controllers\ProductController@sample')->name('sample');

Route::get("/blog", 'App\Http\Controllers\BlogController@index')->name('blog');
Route::get("/blog/{post}", 'App\Http\Controllers\BlogController@post')->name('blog.post');

Route::get('/checkout', 'App\Http\Controllers\OrderController@checkout')->name('checkout');
Route::get('/payment', 'App\Http\Controllers\OrderController@payment')->name('payment');
Route::get('/success', 'App\Http\Controllers\OrderController@success')->name('success');
Route::post('/webhooks/square', 'App\Http\Controllers\OrderController@handleSquarePaymentWebhook')->name('webhooks.square');
Route::get("/order/{order}/{user_id}", 'App\Http\Controllers\OrderController@order')->name('order');

Route::get("/test-product", 'App\Http\Controllers\ProductController@test')->name('test-product');


Route::get("/admin", 'App\Http\Controllers\AdminController@login')->name('admin.login');
Route::middleware(['role:administrator'])->group(function () {
    
    Route::get("/admin/users", 'App\Http\Controllers\AdminController@users')->name('admin.users');
    Route::get("/admin/orders", 'App\Http\Controllers\AdminController@orders')->name('admin.orders');
    Route::get("/admin/blogs", 'App\Http\Controllers\AdminController@blogs')->name('admin.blogs');
    Route::get("/admin/blogs/create", 'App\Http\Controllers\AdminController@createBlog')->name('admin.blogs.create');
    Route::get("/admin/blog/{blog}", 'App\Http\Controllers\AdminController@blog')->name('admin.blog');  
    Route::get("/admin/order/{order}", 'App\Http\Controllers\AdminController@order')->name('admin.order');
    Route::get('/admin/admins', 'App\Http\Controllers\AdminController@admins')->name('admin.admins');   
    Route::get("/admin/contact", 'App\Http\Controllers\AdminController@contactUs')->name('admin.contact-us');
});
Route::post("/admin/login", 'App\Http\Controllers\AdminController@authenticate')->name('admin.authenticate');

Route::get('generate-password', function () {
    return Hash::make('kaqcyx-zystU3-varvar');
});

Route::get('/create-admin', function(){
    $user_id = 13;
    $user = \App\Models\User::where('id', $user_id)->first();
    // assign role administrator
    $user->assignRole('administrator');
});

Route::get("/logout", function(){
    auth()->logout();
    return redirect("/");
})->name('logout');

Route::get("/banner", function(){
    return view('welcome');
})->name('banner');



Route::get("/contact", function(Request $request) {
    return view('contact-us', [
        'subject' => $request->input('subject', ''), 
        'message' => $request->input('message', '')
    ]);
})->name('contact-us');

Route::get("/privacy-policy", function() {
    return view('privacy-policy');
})->name('privacy-policy');