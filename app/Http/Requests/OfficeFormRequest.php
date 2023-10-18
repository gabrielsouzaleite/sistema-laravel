<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeFormRequest extends FormRequest
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
            'job_name' => ['required', 'min:5']
        ];
    }

    public function messages(): array
    {
        return [
            'job_name.required' => 'O nome do cargo é obrigatório!',
            'job_name.min' => 'O nome deve ter no mínimo :min caracters'
        ];
    }
}
