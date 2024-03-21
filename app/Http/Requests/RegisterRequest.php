<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'email' => 'required|unique:users,email',
            'password' => 'required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ];
    }
    public function messages() : array{
        return[
            'name'   => 'Input your full name',
            'email' => 'Input your email address',
            'password' => 'Input your new password',
            'confirm_password' => 'Confirm your password'
        ];
    }
}
