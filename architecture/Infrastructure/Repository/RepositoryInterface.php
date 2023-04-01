<?php

namespace Architecture\Infrastructure\Repository;

interface RepositoryInterface
{
    public function setCollectionName(string $collectionName): void;
    public function save(object $entity): bool;
}
