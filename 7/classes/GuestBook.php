<?php
require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $data;
    public $path;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->data = [];
        $lines = file($path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line){
            $this->data[] = new GuestBookRecord($line);
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function add(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    public function save()
    {
        $data = [];
        foreach ($this->getData() as $line){
            $data[] = $line->getMessage();
        }
        file_put_contents($this->path, implode("\n", $data));
    }
}