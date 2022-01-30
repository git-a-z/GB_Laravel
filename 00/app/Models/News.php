<?php

namespace App\Models;

use DB;

class News 
{
    public function getNews()
    {
        $news = DB::select("SELECT * FROM news");
        return $news;
    }

    public function getNewsById($id)
    {
        $news = DB::select("SELECT * FROM news WHERE id = :id", ['id' => $id]);
        return !empty($news) ? $news[0] : null;
    }

    public function getNewsByCategoryId($id)
    {
        $news = DB::select("SELECT * FROM news WHERE category_id = :id", ['id' => $id]);
        return !empty($news) ? $news : [];
    }
}