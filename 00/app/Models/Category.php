<?php

namespace App\Models;

class Category
{
    private $category = [
        1 => ['title' => 'Sport'],
        2 => ['title' => 'Politics'],
        3 => ['title' => 'Culture'],
    ];

    public function getCategory()
    {
        $categoryArray = session('categoryArray');

        if (isset($categoryArray)) {
            return $categoryArray;            
        } else {
            return $this->category;
        }        
    }

    public function addCategory(string $title)
    {
        $categoryArray = $this->getCategory();
        $key = count($categoryArray) + 1;
        $categoryArray[$key] = ['title' => htmlspecialchars($title)];
        session(['categoryArray' => $categoryArray]);
    }
}