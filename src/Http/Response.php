<?php

declare(strict_types=1);

namespace App\Http;

final class Response {
    public static function json(array $data, int $statusCode = 200): void {
        $method = $_SERVER['REQUEST_METHOD'];
        header('Content-type: application/json');
        http_response_code($statusCode);

        if ($statusCode >= 399) {
            echo json_encode([
                'message' => 'Operation failed',
                'data' => null
            ]);

            exit;
        }

        if ($method === 'GET') {
            echo json_encode([
                'message' => 'Data fetched',
                'data' => $data
            ]);
        }
        if ($method === 'POST' || $method === 'PATCH' || $method === 'PUT' || $method === 'DELETE') {
            echo json_encode([
                'message' => 'Operation success',
                'data' => $data
            ]);
        }

        exit;
    }
}
