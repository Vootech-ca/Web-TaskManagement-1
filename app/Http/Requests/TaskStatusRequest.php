<?php

namespace App\Http\Requests;

use App\Models\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;

/** @mixin TaskStatus */
class TaskStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255']
        ];
    }

    public function attributes(): array
    {
        return [
            // 'name'  => 'username',
        ];
    }

    public function messages(): array
    {
        return [
            // 'name.required' => trans('Username Is Required'),
        ];
    }
}
