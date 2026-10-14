<?php

use App\Models\Article;
use App\Services\ArticleService;

require 'App/Models/Article.php';
require 'App/Services/ArticleService.php';

$article = new Article("Understanding PHP OOP", "An introduction to object-oriented PHP.", "John Doe");

$articleService = new ArticleService();

echo $articleService->publish($article);
