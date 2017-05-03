<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 2</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<h4>Задание 1. Таблицы истинности</h4>
<table class="boolean">
    <caption>И</caption>
    <tr>
        <th>&&</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int)(false && false); ?></td>
        <td><?php echo (int)(false && true); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int)(true && false); ?></td>
        <td><?php echo (int)(true && true); ?></td>
    </tr>
</table>

<table class="boolean">
    <caption>ИЛИ</caption>
    <tr>
        <th>||</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int)(false || false); ?></td>
        <td><?php echo (int)(false || true); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int)(true || false); ?></td>
        <td><?php echo (int)(true || true); ?></td>
    </tr>
</table>

<table class="boolean">
    <caption>Исключающее ИЛИ</caption>
    <tr>
        <th>xor</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int)(false xor false); ?></td>
        <td><?php echo (int)(false xor true); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int)(true xor false); ?></td>
        <td><?php echo (int)(true xor true); ?></td>
    </tr>
</table>

<hr><h4>Задание 2. Вычисление корней квадратного уравнения.</h4>
<?php
require __DIR__ . '/functions.php';

assert(0 == discriminant(0, 0, 0));
assert(0 == discriminant(2, 4, 2));
assert(1 == discriminant(1, 3, 2));
assert(1 == discriminant(2, 5, 3));
assert(4 == discriminant(3, 8, 5));

$a = 1;
$b = 3;
$c = 2;
$D = discriminant($a, $b, $c);
?>

<table class="discriminant">
    <tr>
        <td colspan="3">a = <?php echo $a; ?>, b = <?php echo $b; ?>, c = <?php echo $c; ?></td>
    </tr>
    <tr>
        <td colspan="3">D = b<sup>2</sup> - 4ac = <?php echo $D; ?></td>
    </tr>

<?php
if ( $D > 0 ) {
    $x1 = ( -$b + sqrt( $D ) ) / ( 2 * $a );
    $x2 = ( -$b - sqrt( $D ) ) / ( 2 * $a );
?>

    <tr>
        <td rowspan="2">x<sub>1</sub> = </td>
        <td>-b + &radic;<span class="radix">D</span></td>
        <td rowspan="2" class="result"> = <?php echo $x1; ?></td>
    </tr>
    <tr>
        <td>2a</td>
    </tr>
    <tr>
        <td rowspan="2">x<sub>2</sub> = </td>
        <td>-b - &radic;<span class="radix">D</span></td>
        <td rowspan="2" class="result"> = <?php echo $x2; ?></td>
    </tr>
    <tr>
        <td>2a</td>
    </tr>

<?php
} else if ( $D == 0 ) {
    $x = -$b / ( 2 * $a );
?>
    <tr>
        <td rowspan="2">x = </td>
        <td>-b</td>
        <td rowspan="2" class="result"> = <?php echo $x; ?></td>
    </tr>
    <tr>
        <td>2a</td>
    </tr>

<?php
} else {
?>
    <tr>
        <td colspan="3" class="result">Корней нет</td>
    </tr>
<?php
}
?>

</table>

<hr><h4>Задание 3. Оператор include.</h4>
<?php
var_dump(include __DIR__ . '/test.php'); // выводит содержимое файла и true в случае успеха

echo '<br>';

var_dump(include __DIR__ . '/test123.php'); // выводит warning и false в случае ошибки (файл не существует)

echo '<br>';

var_dump(include(__DIR__ . '/test.php')); // include можно использовать как функцию - выводит содержимое файла и true в случае успеха

echo '<br>';

var_dump(include(__DIR__ . '/math.php')); // из файла можно выводить не только содержимое, но и возвращать значения
?>

<hr><h4>Задание 4. Угадать пол.</h4>
<?php

echo gender('Алексей'); // мужской

echo '<br>';

echo gender('Мария'); // женский

echo '<br>';

echo gender('Фома'); // мужской

echo '<br>';

var_dump(gender('Владислау')); // null
?>

</body>
</html>