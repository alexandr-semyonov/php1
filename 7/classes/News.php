<?php
require __DIR__ . '/Article.php';

class News
{
    protected $data;
    public $path;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->data = [];
        $lines = file($path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line){
            $this->data[] = new Article($line);
        }
    }

    public function getNews()
    {
        return $this->data;
    }

    public function getById(string $id)
    {
        --$id;
        return $this->data[$id];
    }
}