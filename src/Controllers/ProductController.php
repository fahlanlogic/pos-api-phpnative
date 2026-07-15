<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\ProductService;

class ProductController {
    public function __construct(private ProductService $product_service) {
    }

    public function index(): void {
        $this->product_service->getAll();
    }

    public function store(): void {
        $this->product_service->create();
    }
}
