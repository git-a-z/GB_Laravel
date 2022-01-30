<?php

namespace App\Models;

use DB;

class Category
{
    public function getCategory()
    {        
        $category = DB::select("SELECT * FROM category");
        return $category;
    }

    public function addCategory(string $title)
    {
        // $categoryArray = $this->getCategory();
        // $key = count($categoryArray) + 1;
        // $categoryArray[$key] = ['title' => htmlspecialchars($title)];
    }
}