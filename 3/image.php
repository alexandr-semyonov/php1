<?php require __DIR__ . '/data.php'; ?>

<html>
<head>
    <title>Домашнее задание 3</title>
    <link href="/style.css" rel="stylesheet">
</head>
<body>

<h4>Природа</h4>

<div class="image">
    <?php
    foreach ($images as $key => $image):
        if ($_GET['id'] == $key) {
    ?>
        <img src="/images/<?php echo $image; ?>">
    <?php
        }
    endforeach;
    ?>
</div>

</body>
</html>