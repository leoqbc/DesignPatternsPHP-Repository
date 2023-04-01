<?php

namespace Architecture\Infrastructure\Repository\Eloquent;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Architecture\Infrastructure\Repository\RepositoryInterface;

class EloquentRepositoryStrategy implements RepositoryInterface
{
    protected array $collection;
    protected Model $model;

    public function setCollectionName(string $collectionName): void
    {
        $modelString = "App\\Models\\" . ucfirst($collectionName);

        if (false === class_exists($modelString)) {
            throw new Exception("Class {$modelString} doesn't exists");
        }

        $this->model = new $modelString();
    }

    public function save(object $entity): bool
    {
        $model = new $this->model((array)$entity);
        return $model->save();
    }
}
