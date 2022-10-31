<?php
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
// home route
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

// about route
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Muhammad Anendha Zaska",
        "email" => "203040090@mail.unpas.ac.id",
        "image" => "profil.jpg",
        "active" => "about"
    ]);
});

// blog route
Route::get('/posts', [PostController::class, 'index']);
// post blog route 
Route::get('posts/{post:slug}', [PostController::class,'show']);
// category route
Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        "active" => "categories",
        'categories'=>Category::all()
    ]);
});
// route ke category dengan slug
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'title'=>"Post by Category : $category->name",
        "active" => "categories",
        'posts'=>$category->posts->load('category','author'),
    ]);
});
// route ke author dengan slug
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts',[
        'title'=>"Post by Author : $author->name",
        "active" => "authors",
        'posts'=>$author->posts->load('category','author'),
    ]);
});