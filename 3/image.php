<?php
require __DIR__ . '/data.php';
$image = $images[$_GET['id']];
?>

<html>
<head>
    <title>Домашнее задание 3</title>
    <link href="/style.css" rel="stylesheet">
</head>
<body>

<h4>Природа</h4>

<div class="image">
    <img src="/images/<?php echo $image; ?>">
</div>

</body>
</html>