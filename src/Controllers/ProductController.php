<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Response;
use App\Services\ProductService;

class ProductController {
    public function __construct(private ProductService $product_service) {
    }

    public function index(): void {
        $products = $this->product_service->getAll();

        Response::json($products);
    }

    public function store(): void {
        $product = $this->product_service->create();

        Response::json($product);
    }
}
