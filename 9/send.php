<?php
require __DIR__ . '/autoload.php';

// добавление записи в гостевую книгу
if (isset($_POST['add']) && isset($_POST['text'])){
    if (empty(trim($_POST['name']))){
        $name = 'Аноним';
    } else {
        $name = trim($_POST['name']);
    }
    $text = trim($_POST['text']);
    $date = date("Y-m-d");

    $db = new App\Models\DB();

    $sql = 'INSERT INTO guestbook (name, text, date) VALUES (:name, :text, :date)';
    $data = [
        ':name' => $name,
        ':text' => $text,
        ':date' => $date
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось добавить запись!');
    }
    header('Location: /guestbook.php');
}

// удаление записи из гостевой книги
if (isset($_POST['delete']) && isset($_POST['id'])){
    $id = (int)$_POST['id'];

    $db = new App\Models\DB();

    $sql = 'DELETE FROM guestbook WHERE id=:id';
    $data = [
        ':id' => $id
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось удалить запись!');
    }
    header('Location: /admin/guestbook.php');
}

// редактирование информации
if (isset($_POST['update']) && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['text'])){
    $id = (int)$_POST['id'];
    $title = trim($_POST['title']);
    $text = trim($_POST['text']);

    $db = new App\Models\DB();

    $sql = 'UPDATE about SET title=:title, text=:text WHERE id=:id';
    $data = [
        ':title' => $title,
        ':text' => $text,
        ':id' => $id
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось отредактировать запись!');
    }
    header('Location: /admin');
}

// загрузка фотографий
if (isset($_POST['upload']) && isset($_FILES['userFile'])){
    $file = new App\Models\Uploader('userFile');

    $result = $file->upload(__DIR__ . '/images/gallery');
    if (false === $result){
        die('Не удалось добавить фото!');
    }

    $db = new App\Models\DB();

    $sql = 'INSERT INTO gallery (name) VALUES (:name)';
    $data = [
        ':name' => $_FILES['userFile']['name']
    ];
    $result = $db->execute($sql, $data);
    if (false === $result){
        die('Не удалось добавить фото!');
    }
    header('Location: /admin/gallery.php');
}
die('Ошибка');