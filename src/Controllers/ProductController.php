<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\ProductService;

class ProductController {
    public function __construct(private ProductService $product_service) {
    }

    public function index(): void {
        $products = $this->product_service->getAll();

        echo json_encode([
            "message" => "Data fetched",
            "data" => $products
        ]);
    }

    public function store(): void {
        $product = $this->product_service->create();

        echo json_encode([
            "message" => "Operation success",
            "data" => $product
        ]);
    }
}
