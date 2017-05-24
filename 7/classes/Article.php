<?php


class Article
{
    protected $article;

    public function __construct($article)
    {
        $this->article = $article;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function header()
    {
        return strip_tags(explode('|', $this->article)[0]);
    }

    public function shortText()
    {
        return strip_tags(mb_substr(explode('|', $this->article)[1], 0, 120) . '...');
    }

    public function fullText()
    {
        return explode('|', $this->article)[1];
    }



    public function display()
    {
        include __DIR__ . '/../templates/Article.html';
    }

    public function render()
    {
        ob_start();
        include __DIR__ . '/../templates/Article.html';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}