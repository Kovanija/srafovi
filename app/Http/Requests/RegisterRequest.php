<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Morate uneti korisničko ime.',
            'username.unique' => 'Postoji već komercijalista sa poslatim korisničkim imenom.',
            'password.required' => 'Morate uneti lozinku.',
            'password.confirmed' => 'Ponovna lozinka mora biti ista kao lozinka.'
        ];
    }
}
