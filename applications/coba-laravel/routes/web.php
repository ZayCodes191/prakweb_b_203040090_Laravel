<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Muhammad Anendha Zaska",
        "email" => "203040090@gmail.com",
        "image" => "profil.jpg"
    ]);
});
Route::get('/blog', [PostController::class, 'index']);
// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (\App\Models\Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});

Route::get('/authors/{author:username}', function (\App\Models\User $author) {
    return view('posts', [
        'title' => $author->name,
        'posts' => $author->posts,
    ]);
});