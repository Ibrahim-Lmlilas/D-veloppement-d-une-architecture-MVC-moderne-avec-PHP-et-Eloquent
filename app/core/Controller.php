<?php

namespace App\Core;

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);
        include __DIR__ . "/../../app/views/$view.php";
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit();
    }
}
