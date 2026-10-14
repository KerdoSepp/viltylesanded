<?php

use App\Services\ArticleService;

$articleService = new ArticleService();
echo $article = $articleService->createArticle("My Article", "John Doe");