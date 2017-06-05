<?php
require __DIR__ . '/../autoload.php';

$db = new \App\DB();

$sql = 'SELECT * FROM guestbook';

$guestbook = $db->query($sql);

$view = new App\View\View();

$view->assign('guestbook', $guestbook)->display(__DIR__ . '/templates/guestbook.html');