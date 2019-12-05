<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=> 'required|unique:productos|max:50',
            'dato3' => 'required|max:50',
            'dato4' => 'required|max:50',
            'dato5' => 'required|max:50',
            'dato6' => 'required|max:50',
            'dato7' => 'required|max:50',
            'dato8' => 'required|max:50',
        ];
    }
}
