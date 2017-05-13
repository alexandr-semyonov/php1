<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 4</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<h4>Загрузка файлов на сервер</h4>

<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="userFile">
    <input type="submit" value="Загрузить">
</form>

</body>
</html>