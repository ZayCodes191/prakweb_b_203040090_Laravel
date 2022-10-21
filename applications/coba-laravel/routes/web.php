<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Anendha Zaska",
        "email" => "203040090@mail.unpas.ac.id",
        "image" => "profil.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Muhamad Zay",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, quo! Quibusdam reiciendis ex cupiditate dignissimos, numquam facere adipisci cumque quaerat distinctio libero laboriosam pariatur, natus laborum! Blanditiis deserunt odio fuga neque ratione rerum fugit similique qui necessitatibus? Dignissimos reprehenderit itaque quod ad, temporibus suscipit quisquam repellendus, similique possimus ut dolorum."
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Zay",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo obcaecati quibusdam saepe quam hic sunt. Dolorem ratione minus recusandae nisi sunt, quas, beatae ea culpa aliquam ipsum nihil saepe quidem debitis nam temporibus delectus quo. Eveniet accusamus cupiditate iure nostrum corporis culpa quasi aperiam quos laborum officia eaque doloremque deserunt atque praesentium, natus quo ullam illum neque modi unde voluptatum veniam accusantium esse! Ipsam animi reiciendis possimus dolorem debitis consequatur aspernatur, voluptatibus obcaecati sed facilis eveniet temporibus eos, unde veritatis laudantium. Fugiat, facere velit? Enim consectetur explicabo quasi nostrum, excepturi qui eaque sunt nesciunt. Molestias aliquam aperiam consectetur facere corrupti?"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Muhamad Anendha Zaska",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, quo! Quibusdam reiciendis ex cupiditate dignissimos, numquam facere adipisci cumque quaerat distinctio libero laboriosam pariatur, natus laborum! Blanditiis deserunt odio fuga neque ratione rerum fugit similique qui necessitatibus? Dignissimos reprehenderit itaque quod ad, temporibus suscipit quisquam repellendus, similique possimus ut dolorum."
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Zay",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo obcaecati quibusdam saepe quam hic sunt. Dolorem ratione minus recusandae nisi sunt, quas, beatae ea culpa aliquam ipsum nihil saepe quidem debitis nam temporibus delectus quo. Eveniet accusamus cupiditate iure nostrum corporis culpa quasi aperiam quos laborum officia eaque doloremque deserunt atque praesentium, natus quo ullam illum neque modi unde voluptatum veniam accusantium esse! Ipsam animi reiciendis possimus dolorem debitis consequatur aspernatur, voluptatibus obcaecati sed facilis eveniet temporibus eos, unde veritatis laudantium. Fugiat, facere velit? Enim consectetur explicabo quasi nostrum, excepturi qui eaque sunt nesciunt. Molestias aliquam aperiam consectetur facere corrupti?"
        ],
    ];


    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});