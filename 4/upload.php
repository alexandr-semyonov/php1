<?php

if (isset($_FILES['userFile'])) {
    if (0 == $_FILES['userFile']['error']) {
        if ($_FILES['userFile']['type'] == 'image/jpeg' || $_FILES['userFile']['type'] == 'image/png') {
            $filename = $_FILES['userFile']['name'];
            $i = 0;
            while (file_exists(__DIR__ . '/uploads/' . $filename)) {
                $filename = $i . '_' . $_FILES['userFile']['name'];
                $i++;
            }
            move_uploaded_file ($_FILES['userFile']['tmp_name'], __DIR__ . '/uploads/' . $filename);
            //header('Location: /files.php');
?>

<h4>Файл загружен.</h4>
<a href="/files.php">Назад</a>

<?php
        } else {
?>

<h4>Загрузка данного формата файла не поддерживается.</h4>
<a href="/files.php">Назад</a>

<?php
        }

    }
}
?>