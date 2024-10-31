<?php
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

Route::get('/',[HomePageController::class,'home']);
Route::get('/about-us',[AboutUsController::class,'about']);
Route::get('/contact-us',[ContactUsController::class,'contact']);