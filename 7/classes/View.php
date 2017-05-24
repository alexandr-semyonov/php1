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
        include $template . '.html';
    }

    public function render($template)
    {
        ob_start();
        include $template . '.html';
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}