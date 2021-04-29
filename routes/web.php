<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('customer');
});

Route::get("/",[ProductController::class,'index']);
Route::post('save-customer',[ProductController::class, 'saveCustomer']);
Route::post('save-product',[ProductController::class, 'saveProduct']);
Route::get('show-invoice',[ProductController::class, 'showInvoice']);
Route::post('store-invoice',[ProductController::class, 'storeInvoice']);
Route::get('delete',[ProductController::class, 'Delete']);

//Route::get('add-data',[ProductController::class, 'addData']);
//Route::post('store-data',[ProductController::class, 'storeData']);
//Route::get('show-data',[ProductController::class, 'showData']);

//Route::get('all-data',[ProductController::class, 'allData']);
//Route::post('store-customer',[ProductController::class, 'storeCustomer']);