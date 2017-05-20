<?php require __DIR__ . '/classes.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 6</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<h4>Гостевая книга</h4>

<?php
$book = new GuestBook(__DIR__ . '/data.txt');
foreach ($book->getData() as $line):
?>

    <div><?php echo $line; ?></div>

<?php endforeach; ?>

<form action="/send.php" method="post">
    <textarea name="message"></textarea>
    <input type="submit" value="Отправить">
</form>
</body>
</html>