<?php require __DIR__ . '/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 4</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<h4>Гостевая книга</h4>

<?php
$lines = guestBook();
foreach ($lines as $line):
?>

    <div><?php echo $line; ?></div>

<?php endforeach; ?>

<form action="/send.php" method="post">
    <textarea name="message" cols="65" rows="5"></textarea>
    <input type="submit" value="Отправить">
</form>
</body>
</html>