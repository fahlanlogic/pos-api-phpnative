<?php

declare(strict_types=1);

namespace App;

final class Router {
    public function dispatch(): void {
        $method = $_SERVER["REQUEST_METHOD"];   // untuk ambil method
        $uri = $_SERVER["REQUEST_URI"];         // untuk ambil url

        echo $method . " " . $uri;              // gabungin jadi satu string
    }
}
