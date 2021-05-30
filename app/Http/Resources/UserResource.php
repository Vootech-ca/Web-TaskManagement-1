<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User */
class UserResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'username'      => $this->username,
            'user_type'     => $this->user_type,
            'gender'        => $this->gender,
            'created_at'    => $this->created_at
        ];
    }
}
