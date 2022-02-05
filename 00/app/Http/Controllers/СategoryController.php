<?php

namespace App\Http\Controllers;

class СategoryController extends Controller
{
    private $categories = [
        1 => ['title' => 'Sport'],
        2 => ['title' => 'Politics'],
    ];

    private $news = [
        1 => ['title' => 'Novak Djokovic to be deported',
            'text' => 'Novak Djokovic to be deported after Australian court backs visa cancellation.',
            'category' => [1]],
        2 => ['title' => 'Olympic boycott',
            'text' => 'The US, UK, Australia and Canada won\'t be sending government representatives to the Winter Olympics.',
            'category' => [1,2]],
    ];

    private $header = '
        <style>
            body {
                text-align:center;
            }
        </style>
        <a href="/home">home</a>
        <a href="/category">categories</a>
        <a href="/news">news</a>';

    public function index() 
    {
        $response = $this->header . '            
            <h1>Categories</h1>
            <hr>';
        foreach ($this->categories as $id => $item) {
            $url = route('category::news', ['id' => $id]);
            $response .= "
                <div>
                    <a href='{$url}'>
                        {$item['title']}
                    </a>
                </div>";
        }
        $response .= '<hr>';

        return $response;
    }

    public function news($id) 
    {
        $response = $this->header . '
            <h1>News</h1>
            <hr>';
        foreach ($this->news as $newsId => $item) {
            if (in_array($id, $item['category'])) {
                $url = route('news::card', ['id' => $newsId]);
                $response .= "
                    <div>
                        <a href='{$url}'>
                            {$item['title']}
                        </a>
                    </div>";
            }
        }
        $response .= '<hr>';

        return $response;
    }
}