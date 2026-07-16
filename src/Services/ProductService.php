<?php

declare(strict_types=1);

namespace App\Services;

class ProductService {
    public function getAll(): array {
        return [
            [
                "id" => 1,
                "title" => "iPhone 17 Pro",
                "stock" => 20,
                "price" => 17000000
            ],
            [
                "id" => 2,
                "title" => "Mackbook Air M1",
                "stock" => 20,
                "price" => 13000000
            ],
        ];
    }
    public function create(array $body): array {
        return $body;
    }
}
