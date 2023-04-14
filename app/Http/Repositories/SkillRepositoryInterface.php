<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface SkillRepositoryInterface
{
    public function __construct(Model $model);

    public function store(Request | array $data);
    public function getList();
    public function get(int $id);
    public function update(Request | array $data, int $id);
    public function destroy(int $id);
}
