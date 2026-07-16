<?php

declare(strict_types=1);

namespace App;

use ReflectionClass;
use RuntimeException;

/**
    - Apakah class ini punya constructor?    
    - Parameter constructor-nya apa?
    - Type parameter-nya apa?
    - Bagaimana cara membuat object-nya?
 */
final class Container {
    public function get(string $className) {
        // ReflectionClass memecah class dari param seperti pada detail pertanyaan di atas
        $reflection = new ReflectionClass($className);
        $contructor = $reflection->getConstructor();        // mengambil contructor dari reflection, output ReflectionMethod|null

        if ($contructor === null) {
            return new $className();
        }

        $parameters = $contructor->getParameters();         // mengambil parameter pada tiap constructor, output ReflectionParameter[]
        $dependencies = [];                                 // inisialisasi dependencies kosong

        foreach ($parameters as $parameter) {
            $type = $parameter->getType();                  // mengambil type dari tiap parameter, contoh ProductService $product_service (yg diambil type ProductService)

            if ($type === null) {
                throw new RuntimeException("Cannot resolve dependency");
            }

            $dependencies[] = $this->get($type->getName()); // memanggil container lagi dan mengulang eksekusi
        }

        return $reflection->newInstanceArgs($dependencies);
    }
}
