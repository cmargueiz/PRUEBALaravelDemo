<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twUpdateContratosCorporativoRequest extends FormRequest
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
            'D_FechaInicio'=>'required',
            'D_FechaFin'=>'required',
            'S_URLContrato'=>'required|url',
            'tw_corporativos_id'=>'required'
        ];
    }

    function messages()
    {
        return [
            'D_FechaInicio.required'=>'Debe ingresar fecha de inicio',
            'D+FechaFin.required'=>'Debe ingresar fecha de finalizacion',
            'S_URLContrato.required'=>'Debe ingresar url',
            'SURLContrato.required'=>'Debe ingresar url valida',
            'tw_corporativos_id.required'=>'Debe seleccionar uno de los coorporativos'
        ];
    }
}
