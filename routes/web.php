<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CategoriesController;

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
// 404 erorr means page not found, route not foune,,,
// Je function er nam nai seta anonymus function ,,,,

// Route::get('/', function () {
//     return view('welcome');
// });

/*

Route::get('/portfolios', function(){
    return "Portfolios Details"  ;
});

Route::get('/portfolios/{id}', function($id){
    return "Portfolios about id no => " . $id ;
});
Route::get('/portfolios/{id}/{slug}', function($id, $slug){
    return "Portfolios about id no => " . $id . "Slug => " . $slug ;
});

*/
// Route::get('/', [ControllerName::class, 'index'])->name('homeRoute');

Route::get('/', [MyController::class, 'index'])->name('home');
Route::get('/about-us', [MyController::class, 'about'])->name('about');
Route::get('/contact-us', [MyController::class, 'contact'])->name('contact');
Route::get('/blog-details', [MyController::class, 'blog'])->name('blog');


// Catergory create
Route::get('/category/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/category/store', [CategoriesController::class, 'store'])->name('categories.store');




// Route::get('/show/{id?}', [MyController::class, 'show']);
