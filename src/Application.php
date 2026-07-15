<?php

declare(strict_types=1);

namespace App;

use App\Controllers\ProductController;
use App\Services\ProductService;

// final berarti class tidak bisa diwariskan
final class Application {
    public function run(): void {
        $router = new Router();
        $PRODUCT_SERVICE = new ProductService();
        $PRODUCT_CONTROLLER = new ProductController($PRODUCT_SERVICE);

        $router->get(
            '/api/products',
            [$PRODUCT_CONTROLLER, 'index']
        );
        $router->post(
            '/api/products',
            [$PRODUCT_CONTROLLER, 'store']
        );


        $router->dispatch();
    }
}
