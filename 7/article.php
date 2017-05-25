<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/news.txt');

$view = new View();

$view->assign('News', $news)->display(__DIR__ . '/templates/Article.html');