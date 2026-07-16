<?php

declare(strict_types=1);

namespace App;

use App\Controllers\ProductController;

// final berarti class tidak bisa diwariskan
final class Application {
    public function run(): void {
        $router = new Router();
        $CONTAINER = new Container();
        $PRODUCT_CONTROLLER = $CONTAINER->get(ProductController::class);

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
