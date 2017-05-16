<?php
require __DIR__ . '/functions.php';
$cities = require __DIR__ . '/data.php';

if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $letter = mb_substr($city, mb_strlen($city) - 1, 1);
    if ($letter == 'ь' || $letter == 'ъ') {
        $letter = mb_substr($city, mb_strlen($city) - 2, 1);
    }
} else {
    $city = NULL;
    $letter = NULL;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 5</title>
</head>
<body>
<h4>Игра в города</h4>

<form action="/" method="post">
    <input type="text" name="city" value="<?php echo $city; ?>">
    <input type="submit" value="Отправить">
    <p>Ответ: <?php echo searchCity($letter, $cities); ?></p>

</form>
</body>
</html>