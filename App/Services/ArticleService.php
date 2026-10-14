<?php

namespace App\Services;

class ArticleService
{

    public function createArticle($title, $author)
    {
        return new \App\Models\Article($title, $author);
    }
}