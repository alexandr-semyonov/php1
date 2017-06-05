<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

if (!isset($_GET['id'])){
    die('Ошибка вывода статьи');
}

$db = new DB();

$sql = 'SELECT * FROM news WHERE id=:id';

$data = [
    ':id' => (int)$_GET['id']
];

$records = $db->query($sql, $data);

if (empty($records)){
    die('Ошибка вывода статьи');
}

$view = new View();

$view->assign('records', array_shift($records))->display(__DIR__ . '/templates/Article.html');