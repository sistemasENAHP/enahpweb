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
			// 'user' => 'required|string',
			'email' => 'required|string',
            'identification_card'=>'numeric|required|unique:users|min:8|max:99999999',
            'password' => 'required|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            // 'password' => 'required|min:8|confirmed|',Rules\Password::default()->symbols(),
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
            'email.required'=>'El :attribute es obligatorio',
            'email.email'=>'El :attribute debe ser un correo',
            'email.unique'=>'La :attribute ya se encuentra registrado',
            'Motivo_Consulta.required'=>'El :attribute es obligatorio',
             'password.required' => "la contraseña es obligatorio",
             'password.min' => "la contraseña debe tener por lo menos 8 digitos",
             'password.regex' => "la contraseña debe tener por lo menos 1 letra en mayuscula y Simbolo ",
             'password.confirmed' => "la contraseña debe ser iguales",



        ];

    }
}
