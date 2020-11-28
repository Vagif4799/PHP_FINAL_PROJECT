<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Article;

class homePageController extends Controller
{

//    public function __construct()
//    {
//        $pages=Page::orderBy('order', 'ASC')->get();
//        view()->share('pages', $pages);
//    }

    public function index() {
        $articles = Article::orderByDesc('created_at')->paginate(6);
        return view('homePage', compact('articles'));
    }

    public function singlePage($slug) {
        $post = Article::where('slug', $slug)->first();
        return view('post', compact('post'));
    }

    public function getPages($slug) {
        $content = Page::where('slug', $slug)->first();
        return view('page', compact('content'));
    }

}
