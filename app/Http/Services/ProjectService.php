<?php

namespace App\Http\Services;

use App\Http\Repositories\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    protected $repo;

    public function __construct(ProjectRepositoryInterface $repo)
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
            $data['image'] = $request->file('image')->store('projects');
            $this->repo->store($data);

            return Redirect::route('projects.index')->with('message', 'Project created successfully.');
        }

        return Redirect::back();
    }

    public function getList(): Collection | static
    {
        return $this->repo->getList();
    }

    public function get(int $id): Project
    {
        return $this->repo->get($id);
    }

    public function update(Request $request, Project $project, int $id): RedirectResponse
    {
        $request->safe()->only(['name', 'description', 'skill_id']);
        $data = [];
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $data['image'] = $request->file('image')->store('projects');
        }

        $this->repo->update($data, $id);

        return Redirect::route('projects.index')->with('message', 'Project updated successfully.');
    }

    public function destroy(int $id): bool
    {
        return $this->repo->destroy($id);
    }
}
