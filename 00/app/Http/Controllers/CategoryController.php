<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function index(Category $modelCategory) 
    {
        $category = $modelCategory->getCategory();
        return view('category.index', ['category' => $category]);
    }

    public function news($id, News $modelNews) 
    {
        $news = $modelNews->getNewsByCategoryId($id);
        return view('news.index', ['news' => $news]);
    }
}