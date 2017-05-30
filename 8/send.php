<?php
require __DIR__ . '/classes/DB.php';

// добавление новой статьи
if (isset($_POST['add']) && isset($_POST['title']) && isset($_POST['text'])){
    $title = trim($_POST['title']);
    $text = trim($_POST['text']);
    $author = trim($_POST['author']);

    $db = new DB();

    $sql = 'INSERT INTO news (title, text, author) VALUES (:title, :text, :author)';
    $data = [
        ':title' => $title,
        ':text' => $text,
        ':author' => $author
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось добавить запись!');
    }
    header('Location: /');
}

// редактирование статьи
if (isset($_POST['update']) && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['text'])){
    $id = (int)$_POST['id'];
    $title = trim($_POST['title']);
    $text = trim($_POST['text']);
    $author = trim($_POST['author']);

    $db = new DB();

    $sql = 'UPDATE news SET title=:title, text=:text, author=:author WHERE id=:id';
    $data = [
        ':title' => $title,
        ':text' => $text,
        ':author' => $author,
        ':id' => $id
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось отредактировать запись!');
    }
    header('Location: /article.php?id=' . $id);
}

// удаление статьи
if (isset($_POST['delete']) && isset($_POST['id'])){
    $id = (int)$_POST['id'];

    $db = new DB();

    $sql = 'DELETE FROM news WHERE id=:id';
    $data = [
        ':id' => $id
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось удалить запись!');
    }
    header('Location: /');
}

die('Ошибка');