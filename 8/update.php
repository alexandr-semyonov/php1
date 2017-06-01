<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

if (!isset($_POST['update']) || !isset($_POST['id'])) {
    die('Ошибка редактирования статьи');
}

$db = new DB();

$sql = 'SELECT * FROM news WHERE id=:id';

$data = [
    ':id' => (int)$_POST['id']
];

$record = $db->getById($sql, $data);

if (empty($record)){
    die('Ошибка редактирования статьи');
}

$view = new View();

$view->assign('record', $record)->display(__DIR__ . '/templates/ArticleUpdate.html');