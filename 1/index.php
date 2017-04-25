<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 1</title>
</head>
<body>

<?php
echo '<h4>Задание 1.</h4>';

echo 2 + 2;
echo '<br>';

echo 42;
echo '<br>';

echo 42 * 2;
echo '<br>';

echo 2 + 2 * 2;
echo '<br>';

$x = 42 + 2;
echo $x / 2;
echo '<br>';

$email = 'test@test.com';
echo $email;
echo '<br>';
var_dump($email);
echo '<br>';

var_dump(42);
echo '<br>';

var_dump(PHP_INT_MAX);
echo '<br>';

var_dump(1 + 1);
echo '<br>';

var_dump(4 / 3);
echo '<br>';

var_dump('foo'); // последовательность байт
echo '<br>';

$x = 2 + 2;
var_dump($x); //результат определяется операцией - число
echo '<br>';

$x = '3' . 4;
var_dump($x); //результат определяется операцией - строка
echo '<br>';

var_dump((int)42); //принудительнная типизация
echo '<br>';

$res = strlen('foo');
var_dump($res);
echo '<br>';

$res = str_replace('e', 'a', 'Hello');
var_dump($res);

echo '<hr><h4>Задание 3.</h4>';

var_dump(3 / 1);
echo ('<br>');

var_dump(1 / 3);
echo ('<br>');

var_dump('20cats' + 40);
echo ('<br>');

var_dump(18 % 4);

echo '<hr><h4>Задание 4.</h4>';

echo ($a = 2);
echo ('<br>');

$x = ($y = 12) - 8;
echo $x;

echo '<hr><h4>Задание 5.</h4>';

var_dump (1 == 1.0);
echo ('<br>');

var_dump (1 === 1.0);
echo ('<br>');

var_dump ('02' == 2);
echo ('<br>');

var_dump ('02' === 2);
echo ('<br>');

var_dump ('02' == '2');
?>

</body>
</html>