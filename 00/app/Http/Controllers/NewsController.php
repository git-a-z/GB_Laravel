<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index() 
    {
        $news = (new News())->getNews();
        return view('news.index', ['news' => $news]);
    }

    public function card($id) 
    {
        $news = (new News())->getNews();
        $text = isset($news[$id]) ? $news[$id]['text'] : '';
        return view('news.card', ['text' => $text]);
    }
}