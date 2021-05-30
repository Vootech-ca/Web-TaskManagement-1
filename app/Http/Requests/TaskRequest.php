<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;

/** @mixin Task */
class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id'   => ['required', 'numeric', 'exists:App\Models\TaskCategory,id'],
            'status_id'     => ['required', 'numeric', 'exists:App\Models\TaskStatus,id'],
            'title'         => ['required', 'string', 'min:1', 'max:255'],
            'description'   => ['required', 'string', 'min:15'],
            'start_date'    => ['required', 'date'],
            'end_date'      => ['required', 'date', 'after:start_date'],
            'users'         => ['required', 'array'],
            'users.*'       => ['required', 'numeric', 'exists:App\Models\User,id']
        ];
    }
}
