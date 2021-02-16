<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twUpdateCorporativoRequest extends FormRequest
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
        'S_NombreCorto'=>'required|min:5|max:45',
        'S_NombreCompleto'=>'required|min:10|max:75',
        'S_LogoURL'=>'max:255',
        'S_DBName'=>'required|max:45',
        'S_DBUsuario'=>'required|max:45',
        'S_DBPassword'=>'required|max:150',
        'S_SystemUrl'=>'required|max:255',
        'S_Activo'=>'required|boolean|digits:1',
        'D_FechaIncorporacion'=>'required',
        'tw_usuarios_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
        'S_NombreCorto.required'=>'El nombre es requerido',
        'S_NombreCorto.min'=>'Tiene que tener al menos 5 caracteres',
        'S_NombreCorto.max'=>'Tiene que tener maximo 45 caracteres',
        'S_NombreCompleto.required'=>'El nombre completo es requerido',
        'S_NombreCompleto.min'=>'Tiene que tener al menos 10 caracteres',
        'S_NombreCompleto.max'=>'Tiene que tener maximo 75 caracteres',
        'S_DBName.required'=>'Este campo es requrido',
        'S_DBUsuario.required'=>'Este campo es requerido',
        'S_DBPassword.required'=>'Este campo es requerido',
        'S_SystemUrl.required'=>'Url requerida',
        'S_Activo.boolean'=>'Debe ser 0 o 1" para que sea admitido',
        'D_FechaIncorporacion.required'=>'Fecha requerida por el sistema',
        'tw_usuarios_id'=>'id de usuario requeido'
        ];
    }
}
