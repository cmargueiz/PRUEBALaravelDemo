<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twCreateUsuarioRequest extends FormRequest
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
            'username'=>'required|unique:tw_usuarios,username|min:4|max:45',
            'email'=>'required|email|unique:tw_usuarios,email|max:45',
            'S_Nombre'=>'max:45',
            'S_Apellidos'=>'max:45',
            'S_FotoPerfilUrl'=>'url|max:255',
            'S_Activo'=>'required|boolean|digits:1',
            'password'=>'required|max:100',
            'verification_token'=>'max:191',
            'verified'=>'required|max:191',
            'tw_rol_id'=>'numeric|unique:tw_usuarios,tw_rol_id'
        ];
    }

    function messages()
    {
        return [
            'username.required'=>'Debe ingresar su nombre de usuario',
            'username.unique'=>'Este usuario ya existe, ingrese otro',
            'username.min'=>'Debe tener mas de 5 caracteres',
            'S_FotoPerfilUrl'=>'Debe agregar un URL valida',
            'email.required'=>'Debe ingresar su correo electronico',
            'email.email'=>'Correo electronico no valido',
            'email.unique'=>"Correo ya existente",
            'verification_token.required'=>'Token es requerido',
            'verified.required.required'=>'Token es requerido',
            'tw_rol_id.unique'=>'El rol que desea ya existe',
            'S_Activo.boolean'=>'Debe ser 0 o 1 para que sea admitido',
            'tw_rol_id.numeric'=>'Debe ser un valor numerico'
        ];
    }
}
