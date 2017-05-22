<?php
require __DIR__ . '/classes/TextFile.php';
require __DIR__ . '/classes/GuestBook.php';

$book = new GuestBook(__DIR__ . '/data.txt');
$book->append($_POST['message'])->save();

header('Location: /');