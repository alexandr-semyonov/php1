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

$record = $db->query($sql, $data);

if (empty($record)){
    die('Ошибка редактирования статьи');
}

$view = new View();

$view->assign('record', $record[0])->display(__DIR__ . '/templates/ArticleUpdate.html');