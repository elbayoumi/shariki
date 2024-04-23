<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|string|min:6|max:40'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Email is required',
            'email.email'=>'Email is invalid',
            'email.exists'=>'This email is not registered',
            'password.required'=>'Password is required',
            'password.string'=>'Password must be a string',
            'password.min'=>'Password must be at least 6 characters',
            'password.max'=>'Password must be at most 40 characters'
        ];
    }
}
