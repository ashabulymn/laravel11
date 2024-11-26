<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
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
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
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
            
        ]];
    
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'single post', 'post' => $post]);

});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Ashabul Yamin', 
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
