<?php

if (isset($_FILES['userFile'])) {
    if (0 == $_FILES['userFile']['error']) {
        if ($_FILES['userFile']['type'] == 'image/jpeg' || $_FILES['userFile']['type'] == 'image/png') {
            move_uploaded_file ($_FILES['userFile']['tmp_name'], __DIR__ . '/uploads/' . $_FILES['userFile']['name']);
            //header('Location: /files.php');
?>
            <h4>Файл загружен</h4>
            <a href="/files.php">Назад</a>
<?php
        } else {
?>

<h4>Загрузка данного формата файла не поддерживается.</h4>

<?php
        }

    }
}
?>