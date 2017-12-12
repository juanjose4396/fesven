<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteRequest extends Request
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
            'email'=>'unique:users',
            'cedula'=>'unique:users|numeric',
            'telefono'=>'unique:users|numeric',
            'nombre'=>'regex:/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]+)$/u|min:5'
        ];
    }
}
