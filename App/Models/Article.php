<?php

namespace App\Models;

class Article
{

    public $title;
    public $author;
    
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}