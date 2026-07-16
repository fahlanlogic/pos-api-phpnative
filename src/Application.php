<?php

declare(strict_types=1);

namespace App;

use App\Controllers\ProductController;

// final berarti class tidak bisa diwariskan
final class Application {
    public function run(): void {
        $router = new Router();
        $CONTAINER = new Container();                                       // sama dengan DI (dependency injection)
        $PRODUCT_CONTROLLER = $CONTAINER->get(ProductController::class);    // otomatis inject ProductService via Container

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
