<?php

declare(strict_types=1);

namespace App;

use Closure;

final class Router {
    private array $routes = [];

    // tugasnya hanya simpan route ini kedalam $routes
    public function get(string $uri, Closure $handler) {
        $this->routes["GET"][$uri] = $handler;
    }

    // mencari dan menjalankan route
    public function dispatch(): void {
        $method = $_SERVER["REQUEST_METHOD"];   // untuk ambil method
        $uri = $_SERVER["REQUEST_URI"];         // untuk ambil url

        $handler = $this->routes[$method][$uri] ?? null;

        if ($handler === null) {
            http_response_code(404);

            echo "Route not found";
            exit;
        }

        $handler();
    }
}
