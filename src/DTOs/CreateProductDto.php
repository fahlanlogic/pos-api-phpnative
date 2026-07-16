<?php

declare(strict_types=1);

namespace App\DTOs;

use Symfony\Component\Validator\Constraints as Assert;

final class CreateProductDto {
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Type('integer')]
        #[Assert\Unique]
        public readonly int $id,

        #[Assert\NotBlank]
        #[Assert\Type('string')]
        public readonly string $title,

        #[Assert\NotBlank]
        #[Assert\Type('integer')]
        #[Assert\PositiveOrZero]
        public readonly int $stock,

        #[Assert\NotBlank]
        #[Assert\Type('integer')]
        #[Assert\PositiveOrZero]
        public readonly int $price,
    ) {
    }
}
