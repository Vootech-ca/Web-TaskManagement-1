<?php

namespace App\Http\Resources;

use App\Models\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin TaskStatus */
class TaskStatusResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'created_at'    => $this->created_at,
        ];
    }
}
