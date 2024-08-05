<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoporteRequest extends FormRequest
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
			'departamento_id' => 'required',
			'tipo_falla_id' => 'required',
			'NControl' => 'required',
			'Nombre' => 'required|string',
			'Apellidos' => 'required|string',
			'Cedula' => 'required',
			'Correo' => 'required|string',
			'Telefono' => 'required',
			'FechaHora' => 'required',
			'ip_maquina' => 'required|string',
			'Motivo_Falla' => 'required|string',
			'Solucion' => 'required|string',
			'Tecnico' => 'required|string',
        ];
    }
}
