<?php

namespace Core;

class View
{
    public static function render($view)
    {
        $file = dirname(__DIR__) . "/app/views/$view";

        require $file;
    }
}