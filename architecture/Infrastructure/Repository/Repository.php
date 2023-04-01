<?php

namespace Architecture\Infrastructure\Repository;

class Repository implements RepositoryInterface
{
    public function __construct(
        protected RepositoryInterface $repository
    ) {
    }

    public function setCollectionName(string $collectionName): void
    {
        $this->repository->setCollectionName($collectionName);
    }

    public function save(object $entity): bool
    {
        return $this->repository->save($entity);
    }
}
