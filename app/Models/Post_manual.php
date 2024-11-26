<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Ashabul Yamin',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad quae aut nulla dolor pariatur itaque accusamus ullam voluptatibus in temporibus. Incidunt vero quisquam magni. Ea expedita beatae iusto eum libero.'

            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Defa Widya Astuti',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad quae aut nulla dolor pariatur itaque accusamus ullam voluptatibus in temporibus. Incidunt vero quisquam magni. Ea expedita beatae iusto eum libero.'
                
            ]
            ];
    }

    public static function find($slug) : array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }
        return $post;

    }
}

?>