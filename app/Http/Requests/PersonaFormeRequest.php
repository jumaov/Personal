<?php

namespace personal\Http\Requests;

use personal\Http\Requests\Request;

class PersonaFormeRequest extends Request
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
            'tipo_persona'=>'required|max:20'
            'nombre'=>'require|max:100',
            'tipo_documento'=>'required|max:20',
            'num_documento'=>'required|unique:num_documento|max:15',
            'direccion'=>'max:70',
            'telefono'=>'max:15',
            'email'=>'max:50'

        ];
    }
}
