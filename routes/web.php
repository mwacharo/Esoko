<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|-----------------------------------------------------p---------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/',[HomeController::class,'index']); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');
    Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');
});
//admin routes 
Route::get('/view_category',[AdminController::class,'view_category']); 
Route::post('/add_category',[AdminController::class,'add_category']); 
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']); 
Route::get('/view_product',[AdminController::class,'view_product']); 
Route::post('/add_product',[AdminController::class,'add_product']); 
Route::get('/show_product',[AdminController::class,'show_product']); 
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']); 
Route::get('/update_product/{id}',[AdminController::class,'update_product']); 
Route::post('/update_productpost/{id}',[AdminController::class,'update_productpost']);
Route::get('/orders',[AdminController::class,'orders']); 
Route::post('/delivered/{id}',[AdminController::class,'delivered']); 
Route::get('/printpdf/{id}',[AdminController::class,'printpdf']); 


//client routes
Route::get('/product_details/{id}',[HomeController::class,'product_details']); 
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/show_cart',[HomeController::class,'show_cart']); 
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']); 
Route::get('/order',[HomeController::class,'order']); 






