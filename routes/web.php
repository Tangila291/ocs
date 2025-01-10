<?php

use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;


//frontend
 Route::get('/',[HomeController::class,'home'])->name('frontend.home');

 Route::get('/register',[RegisterController::class,'register'])->name('register');
 Route::post('/register-s',[RegisterController::class,'registerSubmit'])->name('register-s');
 Route::post('/c-login',[RegisterController::class,'login'])->name('c-login');

//backend

Route::group(['prefix'=>'admin'], function()
  {

     Route::get('/login',[LoginController::class,'login'])->name('login');
     Route::post('/do-login',[LoginController::class,'dologin'])->name('do_login');
  
     Route::group(['middleware'=>'auth'], function() {
     
        Route::get('/logout',[LoginController::class,'logout']);

        Route::get('/',[HomePageController::class,'home'])->name('home'); 

            //product 
        Route::get('/products',[ProductController::class,'products']) ->name('product.list');
        Route::get('/product/create',[ProductController::class,'productCreate'])->name('product.create.form');
        Route::post('/product/store',[ProductController::class,'store'])->name('product.store');


        Route::get('/wishlist',[WishlistController::class,'wishlist'])->name('c-wishlist');
        Route::post('/wishlist-store',[WishlistController::class,'wishlistSubmit'])->name('wishlist-s');
        Route::get('/wishlist-page',[WishlistController::class,'wishlistP'])->name('wishlist');
  });
  
 });



