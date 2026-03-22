<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
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
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:60|confirmed', //confirmed -> repetir senha
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo de nome é obrigatório.',
            'name.max' => 'O campo tem mais de 255 caracteres.',
            'name.string' => 'O nome deve ser um texto válido.',

            'email.required' => 'O campo de e-mail é obrigatorio.',
            'email.email' => 'O campo de email deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail já está em uso.',

            'password.required' => 'O campo de senha é obrigatorio.',
            'password.min' => 'A senha deve ter ao menos 6 caracteres.',
            'password.max' => 'A senha deve ter ao menos 60 caracteres.',
            'password.confirmed' => 'As senha não coincidem.',
        ];
    }
}
