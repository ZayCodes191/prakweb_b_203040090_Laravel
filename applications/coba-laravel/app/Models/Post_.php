<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Anendha Zaska",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zay Naver",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consequatur corporis dignissimos fugit molestiae nobis possimus quasi reiciendis rem. "
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}