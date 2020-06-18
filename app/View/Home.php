<?php
namespace App\View;

class Home
{
    public static function view( string $path, array $variables = []): void
    {
        extract($variables);

        require 'resources/' . $path;
    }
}