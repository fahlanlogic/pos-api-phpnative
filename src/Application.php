<?php

declare(strict_types=1);

namespace App;

use App\Controllers\ProductController;

// final berarti class tidak bisa diwariskan
final class Application {
    public function run(): void {
        $router = new Router();

        $product_controller = new ProductController();

        $router->get(
            '/api/products',
            [$product_controller, 'index']
        );
        $router->post(
            '/api/products',
            [$product_controller, 'store']
        );


        $router->dispatch();
    }
}
