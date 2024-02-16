<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EdicaoUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'email' => 'required|email|unique:usuarios,email,' . $this->usuario->id,
            'senha' => 'nullable|string',
        ];
    }
}
