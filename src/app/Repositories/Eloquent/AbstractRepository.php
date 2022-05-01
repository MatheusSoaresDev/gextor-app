<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function get(string $id)
    {
        // TODO: Implement get() method.
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(string $data)
    {
        // TODO: Implement delete() method.
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
