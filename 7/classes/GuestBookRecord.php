<?php

class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function display()
    {
        include __DIR__ . '/../templates/GuestBookRecord.html';
    }

    public function render()
    {
        ob_start();
        include __DIR__ . '/../templates/GuestBookRecord.html';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}