<?php

declare(strict_types=1);

namespace App;

// final berarti class tidak bisa diwariskan
final class Application {
    public function run(): void {
        $router = new Router();

        $router->get("/api/products", function (): void {
            echo "Product list";
        });

        $router->dispatch();
    }
}
