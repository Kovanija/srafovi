<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:100',
            'pib' => 'unique:customers',
            'location' => 'required',
            'customer_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Morate uneti naziv.',
            'name.max'    => 'Naziv je predug.',
            'pib.unique'    => 'PIB već postoji.',
            'location.required'    => 'Morate uneti mesto.',
            'customer_type.required'    => 'Morate uneti tip korisnika.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
