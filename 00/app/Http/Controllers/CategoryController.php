<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function index() 
    {
        $category = (new Category())->getCategory();
        return view('category.index', ['category' => $category]);
    }

    public function news($id) 
    {
        $news = (new News())->getNewsByCategoryId($id);
        return view('news.index', ['news' => $news]);
    }
}