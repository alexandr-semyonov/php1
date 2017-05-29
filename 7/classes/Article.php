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

    public function __construct(string $article)
    {
        $this->article = $article;
        $data = explode('|', $this->article);
        $id = $data[0];
        $this->id = ++$id;
        $this->date = $data[1];
        $this->author = $data[2];
        $this->header = strip_tags($data[3]);
        $this->shortText = strip_tags(mb_substr($data[4], 0, 120) . '...');
        $this->fullText = $data[4];
    }

    public function getArticle()
    {
        return $this->article;
    }
}