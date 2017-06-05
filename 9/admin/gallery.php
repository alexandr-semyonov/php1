<?php
require __DIR__ . '/../autoload.php';

$db = new \App\DB();

$sql = 'SELECT * FROM gallery';

$gallery = $db->query($sql);

$view = new App\View\View();

$view->assign('gallery', $gallery)->display(__DIR__ . '/templates/gallery.html');