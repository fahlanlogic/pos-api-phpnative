<?php

declare(strict_types=1);

namespace App\Controllers;

class ProductController {
    public function index(): void {
        echo "Product list di controller";
    }

    public function store(): void {
        echo "Created product";
    }
}
