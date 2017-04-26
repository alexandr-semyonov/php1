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
function discriminant ($a, $b, $c) {
    return $b**2 - 4 * $a * $c;
}

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
var_dump(include 'test.php'); // выводит содержимое файла и true в случае успеха
?>
<br>
<?php
var_dump(include 'function.php'); // выводит warning и false в случае ошибки (файл не существует)
?>
<br>
<?php
var_dump(include('test.php')); // include можно использовать как функцию - выводит содержимое файла и true в случае успеха
?>
<br>
<?php
var_dump(include('math.php')); // из файла можно выводить не только содержимое, но и возвращать значения
?>

<hr><h4>Задание 4. Угадать пол.</h4>
<?php
/*
Женские имена - https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5_%D0%B6%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B0
Мужские имена - https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5_%D0%BC%D1%83%D0%B6%D1%81%D0%BA%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B0
*/
function gender ($name) {
    $male = 'Мужской';
    $female = 'Женский';
    $letter = mb_substr($name, mb_strlen($name, 'utf-8') - 1, 1);
    if ($name == 'Игорь' || $name == 'Илья' || $name == 'Кузьма' || $name == 'Лука' || $name == 'Никита' || $name == 'Савва' || $name == 'Фома') {
        return $male;
    } elseif ($letter == 'а' || $letter == 'я' || $letter == 'ь') {
        return $female;
    } elseif ($letter == 'б' || $letter == 'в' || $letter == 'г' || $letter == 'д' || $letter == 'й' || $letter == 'к' || $letter == 'л' ||
              $letter == 'м' || $letter == 'н' || $letter == 'р' || $letter == 'с' || $letter == 'т' || $letter == 'ф' || $letter == 'х') {
        return $male;
    } else {
        return null;
    }
}

echo gender('Алексей'); // мужской
?>
<br>
<?php
echo gender('Мария'); // женский
?>
<br>
<?php
echo gender('Фома'); // мужской
?>
<br>
<?php
var_dump(gender('Владислау')); // null
?>

</body>
</html>