<?php

use App\Http\Controllers\Admin\BrandContronller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('posts', PostController::class);
Route::resource('categorys', CategoryController::class);
Route::resource('students', StudentController::class);
Route::resource('productions', ProductionController::class);
Route::resource('customers', CustomerController::class);


//index,create,store,show,edit,update,destroy

Route ::prefix('admin')
->as('admin.')
->group(function() {
    Route::get('brands',[BrandContronller::class,'index'])->name('brands.index');
    Route::get('brands/create',[BrandContronller::class,'create'])->name('brands.create');
    Route::post('brands/store',[BrandContronller::class,'store'])->name('brands.store');
    Route::get('brands/{brand}',[BrandContronller::class,'show'])->name('brands.show');
    Route::get('brands/{id}/edit',[BrandContronller::class,'edit'])->name('brands.edit');
    Route::put('brands/{id}',[BrandContronller::class,'update'])->name('brands.update');
    Route::delete('brands/{id}',[BrandContronller::class,'delete'])->name('brands.delete');
});





