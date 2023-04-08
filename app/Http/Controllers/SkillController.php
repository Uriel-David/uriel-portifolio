<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Http\Resources\SkillResource;
use App\Http\Services\SkillService;
use App\Models\Skill;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SkillController extends Controller
{
    private $skillService;

    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = SkillResource::collection($this->skillService->getList());
        return Inertia::render('Skills/index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Skills/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {
        $request->validated();
        $data = [];
        foreach ($request->except('image') as $key => $value) {
            $data[$key] = $value;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('skills');
            $this->skillService->store($data);

            return Redirect::route('skills.index');
        }

        return Redirect::back()->with('message', 'Skill created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, Skill $skill)
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

        $this->skillService->update($data, $skill->id);

        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $this->skillService->destroy($skill->id);

        return Redirect::back()->with('message', 'Skill deleted successfully.');
    }
}
