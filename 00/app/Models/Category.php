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
        return $this->category;
    }
}