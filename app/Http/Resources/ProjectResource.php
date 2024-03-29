<?php

namespace App\Http\Resources;

use App\Models\Skill;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => asset('/storage/' . $this->image),
            'skill' => new SkillResource($this->whenLoaded('skill')),
            'skill_backend' => $this->skill_backend,
            'skill_frontend' => $this->skill_frontend,
            'skill_devops' => $this->skill_devops,
            'skill_extra' => $this->skill_extra,
            'project_url' => $this->project_url,
        ];
    }
}
