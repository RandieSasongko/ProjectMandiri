<?php

namespace App\Models;

class Posts
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Randie Sasongko",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus adipisci minima corporis, neque commodi dolorem excepturi nemo eos, magnam tempore hic totam eum asperiores exercitationem alias iusto enim accusamus sunt ut vitae quo quasi incidunt! Temporibus natus soluta maxime officiis facere mollitia quam quis. Facilis alias maiores unde quidem, iusto commodi amet magnam impedit ea soluta, a qui itaque tempore dicta corrupti perferendis sunt dolorem harum? Incidunt architecto sapiente nulla laudantium odit et voluptatum ipsam cumque, officiis nobis harum minima."
        ],[
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sasongko Randie",
            "body" => "amet consectetur adipisicing elit. Temporibus adipisci minima corporis, neque commodi dolorem excepturi nemo eos, magnam tempore hic totam eum asperiores exercitationem alias iusto enim accusamus sunt ut vitae quo quasi incidunt! Temporibus natus soluta maxime officiis facere mollitia quam quis. Facilis alias maiores unde quidem, iusto commodi amet magnam impedit ea soluta, a qui itaque tempore dicta corrupti perferendis sunt dolorem harum? Incidunt architecto sapiente nulla laudantium odit et voluptatum ipsam cumque, officiis nobis harum minima."
        ]
    ];

    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];

        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstwhere('slug', $slug);
    }
    
}
