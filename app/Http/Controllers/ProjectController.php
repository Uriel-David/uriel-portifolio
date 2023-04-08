<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Http\Services\ProjectService;
use App\Http\Services\SkillService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    private $projectService;
    private $skillService;

    public function __construct(ProjectService $projectService, SkillService $skillService)
    {
        $this->projectService = $projectService;
        $this->skillService = $skillService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectResource::collection($this->projectService->getList());
        return Inertia::render('Projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = $this->skillService->getList();
        return Inertia::render('Projects/create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $request->validated();
        $data = [];
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects');
            $this->projectService->store($data);

            return Redirect::route('projects.index')->with('message', 'Project created successfully.');
        }

        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $skills = $this->skillService->getList();
        return Inertia::render('Projects/edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $request->safe()->only(['name', 'description', 'skill_id']);
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $data['image'] = $request->file('image')->store('projects');
        }

        $this->projectService->update($data, $project->id);

        return Redirect::route('projects.index')->with('message', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $this->projectService->destroy($project->id);

        return Redirect::back()->with('message', 'Project deleted successfully.');
    }
}
