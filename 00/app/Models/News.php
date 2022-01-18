<?php

namespace App\Models;

class News 
{
    private $news = [
        1 => ['title' => 'Novak Djokovic to be deported',
            'text' => 'Novak Djokovic to be deported after Australian court backs visa cancellation.',
            'category' => [1]],
        2 => ['title' => 'Olympic boycott',
            'text' => 'The US, UK, Australia and Canada won\'t be sending government representatives to the Winter Olympics.',
            'category' => [1,2]],
        3 => ['title' => 'Orwellian treatment',
            'text' => 'Serbia\'s Leader Denounces Australia\'s Treatment of Djokovic as \'Orwellian\'.',
            'category' => [1,2,3]],
    ];

    public function getNews()
    {
        return $this->news;
    }
}