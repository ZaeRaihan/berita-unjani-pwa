<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Reza Fahrezi Raihan",
        "email" => "rezafahrezir20@if.unjani.ac.id",
        "image" => "reza.png"
    ]);
});


//halaman all posts
Route::get('/posts', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//halaman kategori
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});


//halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Route::get('dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');