<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

    $posts = [
        (object)[
            "title" => "My First post",
            "content" => $content
        ],
        (object)[
            "title" => "My Second post",
            "content" => $content
        ],
        (object)[
            "title" => "My Third post",
            "content" => $content
        ],
    ];

    return view('posts', [
        "posts" => $posts
    ]);
});

Route::get("post/{post}", function($post){
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

    $posts = [
        (object)[
            "title" => "My First post",
            "content" => $content
        ],
        (object)[
            "title" => "My Second post",
            "content" => $content
        ],
        (object)[
            "title" => "My Third post",
            "content" => $content
        ],
    ];

    $postCached = cache()->remember("posts.{$post}", now()->addMinutes(1), fn() => $posts[$post]);
    return view('post', [
        "post" => $postCached
    ]);
 })->whereAlphaNumeric('post');
