<?php
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomePageController::class,'home']);
Route::get('/wishlist',[WishlistController::class,'wishlist']);

