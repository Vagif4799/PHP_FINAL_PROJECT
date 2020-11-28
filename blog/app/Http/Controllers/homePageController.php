<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class homePageController extends Controller
{
    public function index() {
        $articles = Article::orderByDesc('created_at')->paginate(6);
        return view('homePage', compact('articles'));
    }

    public function singlePage($slug) {
        $post = Article::where('slug', $slug)->first();
        return view('post', compact('post'));
    }

}
