<?php
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductReqController;

Route::get('/',[HomePageController::class,'home']);

Route::get('/product-req',[ProductReqController::class,'productreq']);