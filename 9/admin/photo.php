<?php
require __DIR__ . '/../autoload.php';

if (empty($_GET['id'])){
    die('Ошибка показа изображения');
}

$db = new \App\Models\DB();

$id = (int)$_GET['id'];
$sql = 'SELECT * FROM gallery WHERE id=:id';
$data = [
    ':id' => $id
];

$photo = $db->query($sql, $data);

$view = new App\View\View();

$view->assign('photo', array_shift($photo))->display(__DIR__ . '/templates/photo.html');