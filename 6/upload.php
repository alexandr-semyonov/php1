<?php
require __DIR__ . '/classes.php';
$file = new Uploader('userFile');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 6</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>

<h4><?php echo $file->path(__DIR__ . '/uploads/')->upload(); ?></h4>
<a href="/files.php">Назад</a>

</body>
</html>