<?php
require __DIR__ . '/classes.php';

$book = new GuestBook(__DIR__ . '/data.txt');
$book->append($_POST['message'])->save();

header('Location: /');