<?php
require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$book = new GuestBook(__DIR__ . '/data/guestbook.txt');


/*
include __DIR__ . '/templates/GuestBook.html';
*/


$view = new View();


$view->assign('GuestBook', $book)->display(__DIR__ . '/templates/GuestBook.html');
