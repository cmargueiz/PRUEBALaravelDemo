<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twUpdateDocumentoRequest extends FormRequest
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
            'S_Nombre' => 'required|min:5|max:45',
            'N_Obligatorio'=> 'required|digits:1',
            'S_Descripcion' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'S_Nombre.required' => 'El nombre es requerido',
            'S_Nombre.min'=>'Deben ser mas de 5 caracteres',
            'S_Nombre.max'=>'Deben ser mas de 45 caracteres',
            'N_Obligatorio.required' => 'El valor es requerido',
            'N_Obligatorio.digits_between'=>'Debe ser un numero entre 0 y 9',
            'S_Descripcion.required'=> 'Debe ingresar una descripcion'
        ];
    }
}
