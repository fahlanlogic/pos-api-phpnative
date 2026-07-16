<?php

declare(strict_types=1);

namespace App\Validation;

use RuntimeException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class ValidationService {
    public function __construct(private ValidatorInterface $validator) {
    }

    public function validate(object $dto): void {
        $errors = $this->validator->validate($dto);

        if (count($errors) > 0) {
            throw new RuntimeException(
                (string) $errors
            );
        }
    }
}
