<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        dd(request(['search']));
        // dd(request()->only('search'));
        return view('posts', [
            "posts" => Post::latest()
                ->filter(request(['search']))
                ->get()
        ]);

    }

}
