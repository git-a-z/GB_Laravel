<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class СategoryController extends Controller
{
    public function index() 
    {
        $category = (new Category())->getCategory();
        return view('category.index', ['category' => $category]);
    }

    public function news($id) 
    {
        $news = (new News())->getNews();
        $newsByCategory = [];

        foreach ($news as $newsID => $item) {
            if (in_array($id, $item['category'])) {
                $newsByCategory[$newsID] = $item;
            }
        }

        return view('news.index', ['news' => $newsByCategory]);
    }
}