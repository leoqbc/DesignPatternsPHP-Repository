<?php

namespace Architecture\Infrastructure\Repository;

use Illuminate\Database\Eloquent\Model;

class WrongRepository
{
    public function __construct(
        protected Model $model
    ) {
    }

    public function save()
    {
        $this->model->save();
    }

    public function delete()
    {
        $this->model->delete();
    }
}
