<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Whoops\Run;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'nombre' =>  'nombre del curso'
        ];
    }
    public function messages()
    {
        return[
            'descripcion.required' => 'Debes de introducir una descripcion al curso'
        ];
    }


}
