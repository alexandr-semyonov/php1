<?php

class TextFile
{
    protected $lines;
    public $path;

    public function getData()
    {
        return $this->lines;
    }

    public function append($text)
    {
        $this->lines[] = $text;
        return $this;
    }

    public function save()
    {
        file_put_contents($this->path, implode("\n", $this->lines));
    }
}