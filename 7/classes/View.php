<?php

class View
{
    protected $data;

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
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