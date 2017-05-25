<?php


class Article
{
    protected $article;
    public $id;
    public $date;
    public $author;
    public $header;
    public $shortText;
    public $fullText;

    public function __construct($article)
    {
        $this->article = $article;
        $id = explode('|', $this->article)[0];
        $this->id = ++$id;
        $this->date = explode('|', $this->article)[1];
        $this->author = explode('|', $this->article)[2];
        $this->header = strip_tags(explode('|', $this->article)[3]);
        $this->shortText = strip_tags(mb_substr(explode('|', $this->article)[4], 0, 120) . '...');
        $this->fullText = explode('|', $this->article)[4];
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function display()
    {
        include __DIR__ . '/../templates/ArticleRecord.html';
    }

    public function render()
    {
        ob_start();
        include __DIR__ . '/../templates/ArticleRecord.html';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}