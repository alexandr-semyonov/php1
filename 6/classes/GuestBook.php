<?php

class GuestBook extends TextFile
{
    public function __construct($path)
    {
        $this->path = $path;
        $this->lines = file($path, FILE_IGNORE_NEW_LINES);
    }
}