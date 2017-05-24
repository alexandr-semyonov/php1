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

    public function display($template)
    {
        include __DIR__ . '/../templates/' . $template . '.html';
    }

    public function render($template)
    {
        ob_start();
        include __DIR__ . '/../templates/' . $template . '.html';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}