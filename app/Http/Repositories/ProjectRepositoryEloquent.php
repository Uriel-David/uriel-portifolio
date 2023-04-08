<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

class ProjectRepositoryEloquent implements ProjectRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getList()
    {
        return $this->model->with('skill')->get();
    }

    public function get(int $id)
    {
        return $this->model->with('skill')->find($id);
    }

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
