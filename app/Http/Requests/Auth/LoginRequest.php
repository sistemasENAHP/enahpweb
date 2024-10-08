<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\UserRequest;
class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'identification_card'=>'numeric|required|min:8|max:99999999',
            'password' =>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/' ,

        ];


    }

            public function messages(): array {

        return[

            
            'identification_card.required'=>'La :Cedula es obligatorio',
            'identification_card.unique'=>'La Cedula ya se encuentra registrado',
            'cedula.between'=>'la :attribute debe tener 7.',
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

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('identification_card', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'identification_card' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'identification_card' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('identification_card')).'|'.$this->ip());
    }
}
