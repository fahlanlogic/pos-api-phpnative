<?php

declare(strict_types=1);

namespace App\Http;

final class Request {
    public function json(): array {
        $input = file_get_contents('php://input');                      // ambil request body
        $body = json_decode($input, true, 512, JSON_THROW_ON_ERROR);    // decode dan format jadi assosiatif array

        return $body;
    }
}
