<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/** @mixin User */
class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'username'  => ['required', 'string', 'unique:App\Models\User,username'],
            'password'  => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()],
            'gender'    => ['nullable', 'boolean'],
            'user_type' => ['required', 'in:Admin,User'],
        ];
        if ($this->isMethod('PUT')) {
            $rules['username'][2] = 'unique:App\Models\User,username,' . $this->id;
        }
        return $rules;
    }
}
