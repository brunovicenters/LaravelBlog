<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use App\Models\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){   

        return view('blog', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post){
        return view('post', ['post' => $post]);
    }
}
