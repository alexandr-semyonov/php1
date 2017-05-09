<?php

$operations = ['+', '-', '*', '/'];

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
    if (0 == $_GET['num2'] && $_GET['operation'] == '/') {
        $result = 'На ноль делить нельзя';
    } else {
        switch ($_GET['operation']) {
            case '+':
                $result = $_GET['num1'] + $_GET['num2'];
                break;
            case '-':
                $result = $_GET['num1'] - $_GET['num2'];
                break;
            case '*':
                $result = $_GET['num1'] * $_GET['num2'];
                break;
            case '/':
                $result = $_GET['num1'] / $_GET['num2'];
                break;
            default:
                $result = $_GET['num1'] + $_GET['num2'];
                break;
        }
    }
} else {
    $_GET['num1'] = '';
    $_GET['num2'] = '';
    $_GET['operation'] = '';
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
    <input type="text" name="num1" value="<?php echo $_GET['num1']; ?>" />
    <select name="operation">
        <?php foreach ($operations as $op): ?>
        <option value="<?php echo $op; ?>"<?php if ($_GET['operation'] == $op) { ?> selected<?php } ?>><?php echo $op; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="num2" value="<?php echo $_GET['num2']; ?>" />
    <input type="submit" value="=">
    <?php echo $result; ?>
</form>

<?php
if ($_GET['num1'] != '' && $_GET['num2'] != '' && $_GET['operation'] != '') {
    echo $_GET['num1'] . ' ' . $_GET['operation'] . ' ' . $_GET['num2'] . ' = ' . $result;
}
?>

</body>
</html>