<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentFormRequest extends FormRequest
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
        'department_name' => ['required', 'min:5']
        ];
    }

    public function messages(): array
    {
        return [
            'department_name.required' => 'O nome do departamento é obrigatório',
            'department_name.min' => 'O nome do departamento deve ter no mínimo :min caracteres'
        ];
    }
}
