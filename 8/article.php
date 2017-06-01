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

$record = $db->getById($sql, $data);

if (empty($record)){
    die('Ошибка вывода статьи');
}

$view = new View();

$view->assign('record', $record)->display(__DIR__ . '/templates/Article.html');