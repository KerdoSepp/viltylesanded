<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function publish(Article $article)
    {
        return 'Publishing article: "' . $article->title . '" by ' . $article->author;
    }
}