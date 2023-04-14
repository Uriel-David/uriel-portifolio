<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SkillRepositoryEloquent implements SkillRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store(Request | array $data): Model
    {
        return $this->model->create($data);
    }

    public function getList(): Collection | static
    {
        return $this->model->all();
    }

    public function get(int $id): Model
    {
        return $this->model->find($id);
    }

    public function update(Request | array $data, int $id): bool
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id): bool
    {
        return $this->model->find($id)->delete();
    }
}
