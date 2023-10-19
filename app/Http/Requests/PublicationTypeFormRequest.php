<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationTypeFormRequest extends FormRequest
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
            'type' => ['required', 'min:5']
        ];
    }

    public function messages(): array
    {
        return [
        'type.required' => 'O nome do tipo de documento é obrigatório!',
        'type.min' => 'O nome deve ter no mínimo :min caracters'
        ];
    }
}
