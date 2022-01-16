<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private $news = [
        1 => ['title' => 'Novak Djokovic to be deported',
            'text' => 'Novak Djokovic to be deported after Australian court backs visa cancellation.'],
        2 => ['title' => 'Olympic boycott',
            'text' => 'The US, UK, Australia and Canada won\'t be sending government representatives to the Winter Olympics.'],
    ];

    private $header = '
        <style>
            body {
                text-align:center;
            }
        </style>
        <a href="/home">home</a>
        <a href="/category">categories</a>
        <a href="/news">news</a>
        <h1>News</h1>
        <hr>';

    public function index() 
    {
        $response = $this->header;
        foreach ($this->news as $id => $item) {
            $url = route('news::card', ['id' => $id]);
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

    public function card($id) 
    {
        $response = $this->header;
        $news = $this->news[$id];
        $response .= $news['text'] . '<hr>';

        return $response;
    }
}