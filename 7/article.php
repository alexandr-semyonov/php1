<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/news.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 7</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<h3><?php echo $news->getArticleById($_GET['id'])->header(); ?></h3>


        <div>

            <?php echo $news->getArticleById($_GET['id'])->fullText(); ?>
        </div>



</body>
</html>