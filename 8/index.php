<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

$db = new DB();

$sql = 'SELECT * FROM news ORDER BY id DESC';

$news = $db->query($sql);

$view = new View();

$view->assign('news', $news)->display(__DIR__ . '/templates/News.html');