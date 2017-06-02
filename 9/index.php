<?php
require __DIR__ . '/autoload.php';

$db = new \App\Models\DB();

$sql = 'SELECT * FROM about';

$about = $db->query($sql);

$view = new App\View\View();

$view->assign('about', array_shift($about))->display(__DIR__ . '/templates/index.html');