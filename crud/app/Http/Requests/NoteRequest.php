<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool //cuando vamos a permitir que se utilice esta peticion 
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array // las reglas que deben cumplir
    {
        return [

            'title' => 'requiered|max:255|min:3',
            'description' => 'requiered|max:255|min:3'

        ];
    }
}
