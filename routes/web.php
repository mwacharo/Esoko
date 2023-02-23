<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    Route::get('/redirect',[HomeController::class,'redirect']);
});

Route::get('/view_category',[AdminController::class,'view_category']); 
Route::post('/add_category',[AdminController::class,'add_category']); 
//route::get('/delete_category/{id}',[AdminController::class,'delete']); 
//Route::get('delete_category',$data->id,[AdminController::class,'delete_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']); 
Route::get('/view_product',[AdminController::class,'view_product']); 
Route::post('/add_product',[AdminController::class,'add_product']); 
Route::get('/show_product',[AdminController::class,'show_product']); 

