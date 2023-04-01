<?php

namespace Architecture\Application;

use Architecture\Infrastructure\Repository\Repository;

class ProductService
{
    public function __construct(
        protected Repository $repository
    ) {
    }

    public function create(ProductInputDTO $product): void
    {
        $this->repository->setCollectionName('product');

        if (false === $this->repository->save($product)) {
            throw new \Exception('Product cannot be created');
        }
    }
}
