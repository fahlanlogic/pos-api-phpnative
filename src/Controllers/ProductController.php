<?php

declare(strict_types=1);

namespace App\Controllers;

use App\DTOs\CreateProductDto;
use App\Http\Request;
use App\Http\Response;
use App\Services\ProductService;

class ProductController {
    public function __construct(private ProductService $product_service, private Request $req) {
    }

    public function index(): void {
        $products = $this->product_service->getAll();

        Response::json($products);
    }

    public function store(): void {
        $body = $this->req->json();
        $dto = new CreateProductDto(
            id: $body['id'],
            title: $body['title'],
            stock: $body['stock'],
            price: $body['price'],
        );
        $product = $this->product_service->create($dto);

        Response::json($product);
    }
}
