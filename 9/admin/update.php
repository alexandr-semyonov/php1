<?php
require __DIR__ . '/../autoload.php';

if (!isset($_POST['update']) || !isset($_POST['id'])) {
    die('Ошибка редактирования информации');
}

$id = (int)$_POST['id'];

$db = new App\DB();

$sql = 'SELECT * FROM about WHERE id=:id';

$data = [
    ':id' => $id
];

$record = $db->query($sql, $data);

if (empty($record)){
    die('Ошибка редактирования информации');
}

$view = new App\View\View();

$view->assign('record', array_shift($record))->display(__DIR__ . '/templates/indexUpdate.html');