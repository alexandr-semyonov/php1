<?php

class Uploader
{
    public $name;
    public $path;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->name])) {
            if (0 == $_FILES[$this->name]['error']) {
                if ($_FILES[$this->name]['type'] == 'image/jpeg' || $_FILES[$this->name]['type'] == 'image/png') {
                    return true;
                }
            }
        }
        return false;
    }

    public function path($path)
    {
        $this->path = $path;
        return $this;
    }

    public function upload()
    {
        if (true === $this->isUploaded()) {
            $filename = $_FILES[$this->name]['name'];
            $i = 0;
            while (file_exists($this->path . $filename)) {
                $filename = $i . '_' . $_FILES[$this->name]['name'];
                $i++;
            }
            move_uploaded_file($_FILES[$this->name]['tmp_name'], $this->path . $filename);
            return 'Файл загружен';
        } else {
            return 'Ошибка при загрузке файла';
        }
    }
}