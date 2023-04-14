<?php

namespace App\Http\Services;

use App\Http\Repositories\SkillRepositoryInterface;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SkillService
{
    protected $repo;

    public function __construct(SkillRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validated();
        $data = [];
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('skills');
            $this->repo->store($data);

            return Redirect::route('skills.index');
        }

        return Redirect::back()->with('message', 'Skill created successfully.');
    }

    public function getList(): Collection | static
    {
        return $this->repo->getList();
    }

    public function get(int $id): Skill
    {
        return $this->repo->get($id);
    }

    public function update(Request $request, Skill $skill, int $id): RedirectResponse
    {
        $request->safe()->only(['name', 'hide']);
        $data = [];
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $data['image'] = $request->file('image')->store('skills');
        }

        $this->repo->update($data, $id);

        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');
    }

    public function destroy(int $id): bool
    {
        return $this->repo->destroy($id);
    }
}
