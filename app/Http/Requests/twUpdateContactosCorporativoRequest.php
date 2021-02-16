<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twUpdateContactosCorporativoRequest extends FormRequest
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
    public function rules()
    {
        return [
            'S_Nombre'=>'required|max:45',
            'S_Puesto'=>'required|max:45',
            'S_Comentarios'=>'required|max:255',
            'S_Email'=>'required|email|max:45',
            'N_TelefonoFijo'=>'digits:8',
            'N_TelefonoMovil'=>'digits:8',
            'tw_corporativos_id'=>'required',
        ];
    }

    function messages()
    {
        return [
            'S_Nombre.required'=>'Debe ingresar el nombre',
            'S_Nombre.max'=>'Deben ser menos de 45 caracteres',
            'S_Puesto.required'=>'Debe ingresar el puesto asignado',
            'S_Puesto.max'=>'Deben ser menos de 45 caracteres',
            'S_Comentarios'=>'Debe ingresar un comentario',
            'S_Email.required'=>'Debe ingresar un correo',
            'S_Email.email'=>'Correo invalido',
            'N_TelefonoFijo.digits'=>'Debe tener 8 digitos',
            'N_TelefonoMovil.digits'=>'Debe tener 8 digitos',
            'tw_corporativos_id.required'=>'Debe elegir un corporativo',
            
        ];
    }
}
