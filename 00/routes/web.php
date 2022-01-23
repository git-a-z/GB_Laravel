<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1 style="text-align:center;">Hello, world!</h1>';
});

Route::get('/01', function () {
    return view('homework01');
});

Route::get('/02', function () {
    return view('homework02');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/category', [CategoryController::class, 'index'])
    ->name('category::catalog');

Route::get('/category/news/{id}', [CategoryController::class, 'news'])
    ->where('id', '[0-9]+')
    ->name('category::news');

Route::get('/news', [NewsController::class, 'index'])
    ->name('news::catalog');

Route::get('/news/card/{id}', [NewsController::class, 'card'])
    ->where('id', '[0-9]+')
    ->name('news::card');

Route::get('/admin/category/new', [AdminCategoryController::class, 'new'])
    ->name('admin::category::new');

Route::post('/admin/category/create', [AdminCategoryController::class, 'create'])
    ->name('admin::category::create');