<?php
require __DIR__ . '/classes/GuestBook.php';

$book = new GuestBook(__DIR__ . '/data/guestbook.txt');

$record = new GuestBookRecord($_POST['message']);

$book->add($record)->save();

header('Location: /');