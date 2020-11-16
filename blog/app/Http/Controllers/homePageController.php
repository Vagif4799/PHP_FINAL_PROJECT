<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class homePageController extends Controller
{
    public function index() {
        $articles = Article::orderByDesc('created_at')->get();
        return view('homePage', compact('articles'));
    }
}
