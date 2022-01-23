<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index(News $modelNews) 
    {
        $news = $modelNews->getNews();
        return view('news.index', ['news' => $news]);
    }

    public function card($id, News $modelNews) 
    {
        $card = $modelNews->getNewsById($id);
        return view('news.card', ['card' => $card]);
    }
}