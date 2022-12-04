<?php

use App\Http\Controllers\DataController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [DataController::class, 'index']);
Route::get('/categories/{CategoryID}', [DataController::class, 'product']);
Route::get('/product/{ProductID}', [DataController::class, 'productDetail']);
Route::post('request/post-data', [DataController::class, 'sessionData']);
Route::get('/cartsession', [DataController::class, 'processPostData'])->name('addcart');
