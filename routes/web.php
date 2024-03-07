<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDetails;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AppendAuthParamUrl;
use App\Http\Middleware\AuthUrlParameter;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('portfolio', [CategoryController::class, 'index'])->name('portfolio');
Route::get('portfolio-show/{id}', [CategoryDetails::class, 'showPortfolio'])->name('portfolio-details'); 
Route::post('contact.submit', [ContactController::class, 'submitForm'])->name('contact.submit');


    /*
    -------------------------------------
    | category CRUD
    -------------------------------------
    */

Route::middleware([AuthUrlParameter::class])->group(function () {


    Route::get('category-dashboard', [CategoryController::class, 'dashboard'])->name('category-dashboard');
    Route::get('category-manage', [CategoryController::class, 'manage'])->name('category-manage');

    }); 

    /*
    -------------------------------------
    | category CRUD
    -------------------------------------
    */
    Route::get('create-category', [CategoryController::class, 'create'])->name('category-create');
    Route::post('store-category', [CategoryController::class, 'store'])->name('category-store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
    Route::patch('edit-category/{id}', [CategoryController::class, 'update'])->name('category-update');
    Route::delete('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category-delete');

    /*
    -------------------------------------
    | Category Details CRUD
    -------------------------------------
    */
    Route::get('show-category/{id}', [CategoryDetails::class, 'show'])->name('category-show'); 
    Route::post('store-catDetails', [CategoryDetails::class, 'store'])->name('store-catDetails');
    Route::get('create-catDetails', [CategoryDetails::class, 'create'])->name('create-catDetails');
    Route::patch('edit-categoryDetails/{id}', [CategoryDetails::class, 'update'])->name('categoryDetails-update');
    Route::get('edit-catDetails/{id}/edit', [CategoryDetails::class, 'edit'])->name('edit-catDetails');
    Route::delete('/categoryDetail-delete/{id}', [CategoryDetails::class, 'delete'])->name('categoryDetail-delete');



