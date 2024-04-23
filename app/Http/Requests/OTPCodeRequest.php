<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OTPCodeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->user())
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'otp_code' => 'required|numeric|digits:4'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'otp_code.required' => 'الرمز مطلوب',
            'otp_code.numeric' => 'الرمز يجب أن يكون أرقام فقط',
            'otp_code.digits' => 'الرمز يجب أن يكون 4 أرقام'
        ];
    }
}
