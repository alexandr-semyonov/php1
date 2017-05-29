<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

if (isset($_GET['id'])){
    $id = (int)$_GET['id'];

    $article = (new News(__DIR__ . '/data/news.txt'))->getById($id);

    $view = new View();

    $view->assign('Article', $article)->display(__DIR__ . '/templates/Article.html');
}
die;