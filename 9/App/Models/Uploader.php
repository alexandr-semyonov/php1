<?php

namespace App\Models;

class Uploader
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->name])) {
            if (0 == $_FILES[$this->name]['error']) {
                if ($_FILES[$this->name]['type'] == 'image/jpeg' || $_FILES[$this->name]['type'] == 'image/png' || $_FILES[$this->name]['type'] == 'image/gif') {
                    return true;
                }
            }
        }
        return false;
    }

    public function upload($path)
    {
        if (true === $this->isUploaded()) {
            $filename = '/' . $_FILES[$this->name]['name'];
            $i = 0;
            while (file_exists($path . $filename)) {
                $filename = '/' . $i . '_' . $_FILES[$this->name]['name'];
                $i++;
            }
            $result = move_uploaded_file($_FILES[$this->name]['tmp_name'], $path . $filename);
            if (true === $result){
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}