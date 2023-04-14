<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Services\ProjectService;
use App\Http\Services\SkillService;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

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
    public function index(): Response
    {
        $projects = ProjectResource::collection($this->projectService->getList());
        return Inertia::render('Projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
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
    public function store(ProjectRequest $request): RedirectResponse
    {
        return $this->projectService->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project): Response
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
    public function update(ProjectRequest $request, Project $project): RedirectResponse
    {
        return $this->projectService->update($request, $project, $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project): RedirectResponse
    {
        Storage::delete($project->image);
        $this->projectService->destroy($project->id);

        return Redirect::back()->with('message', 'Project deleted successfully.');
    }
}
