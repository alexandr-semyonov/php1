<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 7</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<h4>Новости</h4>

<?php
$news = new News(__DIR__ . '/data/news.txt');

foreach ($news->getNews() as $key => $article){
    ++$key;
?>

    <article>
        <div>
            <h3><a href="/article.php?id=<?php echo $key; ?>"><?php echo $article->header(); ?></a></h3>
            <?php echo $article->shortText(); ?>
        </div>
    </article>

<?php
}
?>

</body>
</html>