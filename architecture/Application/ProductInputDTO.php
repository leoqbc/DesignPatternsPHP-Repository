<?php

declare(strict_types=1);

namespace Architecture\Application;

class ProductInputDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public float $price
    ) {
    }
}
