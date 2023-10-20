<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusFromRequest extends FormRequest
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
            'user_status' => ['required', 'min:5']
        ];
    }

    public function messages(): array
    {
        return [
        'user_status.required' => 'O nome do status é obrigatório!',
        'user_status.min' => 'O nome deve ter no mínimo :min caracters'
        ];
    }
}
