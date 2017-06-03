<?php

namespace App\View;

class View
{
    protected $data;

    public function assign(string $name, array $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function render(string $template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }
}