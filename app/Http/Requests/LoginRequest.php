<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|min:6',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Password can\'t be empty.',
            'password.min' => 'Password can\'t be less than 6 characters.',
            'email.required' => 'Email can\'t be empty.'
        ];
    }
}
