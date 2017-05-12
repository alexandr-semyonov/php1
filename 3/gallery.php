<?php require __DIR__ . '/data.php'; ?>

<html>
<head>
    <title>Домашнее задание 3</title>
    <link href="/style.css" rel="stylesheet">
</head>
<body>

<h4>Галерея</h4>

<div class="preview">
    <?php foreach ($images as $key => $image): ?>
    <a href="/image.php?id=<?php echo $key; ?>"><img src="/images/<?php echo $image; ?>" alt=""></a>
    <?php endforeach; ?>
</div>

</body>
</html>