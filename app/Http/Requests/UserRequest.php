<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'name' => 'required|string',
			'surname' => 'required|string',
			'user' => 'required|string',
			'email' => 'required|string',
            'identification_card'=>'numeric|required|unique:users|min:8|max:99999999',
        ];
    }

        public function messages(){

        return[

            'name.required'=>'El :attribute es obligatorio',
            'surname.required'=>'El :attribute es obligatorio',
            'identification_card.required'=>'La :Cedula es obligatorio',
            'identification_card.unique'=>'La Cedula ya se encuentra registrado',
            // 'cedula.between'=>'la :attribute debe tener 7.',
            'sexo.required' =>'El :attribute es obligatorio',
            'Edad.required' =>'El :attribute es obligatorio',
            'Telefono.required' =>'La :attribute es obligatorio',
            // 'Telefono2.required' =>'La :attribute es obligatorio',
            'EstadoCivil.required' =>'La :attribute es obligatorio',
            'Direccion.required' =>'La :attribute es obligatorio',
            'Correo.required'=>'El :attribute es obligatorio',
            'Correo.email'=>'El :attribute debe ser un correo',
            'Correo.unique'=>'La :attribute ya se encuentra registrado',
            'Motivo_Consulta.required'=>'El :attribute es obligatorio',



        ];

    }
}
