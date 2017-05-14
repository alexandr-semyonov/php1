<?php

$operations = ['+', '-', '*', '/'];

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if (in_array($_GET['operation'], $operations)) {
        $operation = $_GET['operation'];
    } else {
        $operation = '+';
    }

    if (0 == $num2 && $operation == '/') {
        $result = 'На ноль делить нельзя';
    } else {
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            default:
                $result = $num1 + $num2;
                break;
        }
    }
} else {
    $num1 = '';
    $num2 = '';
    $operation = '';
    $result = '';
}
?>

<html>
<head>
    <title>Домашнее задание 3</title>
</head>
<body>

<h4>Калькулятор</h4>

<form action="/calc.php" method="get">
    <input type="text" name="num1" value="<?php echo $num1; ?>" />
    <select name="operation">
        <?php foreach ($operations as $op): ?>
        <option value="<?php echo $op; ?>"<?php if ($operation == $op) { ?> selected<?php } ?>><?php echo $op; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="num2" value="<?php echo $num2; ?>" />
    <input type="submit" value="=">
    <?php echo $result; ?>
</form>

<?php
if ($num1 != '' && $num2 != '' && $operation != '') {
    echo $num1 . ' ' . $operation . ' ' . $num2 . ' = ' . $result;
}
?>

</body>
</html>