<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class twUpdateDocumentosCorporativosRequest extends FormRequest
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
            
            'tw_corporativos_id'=>'required|numeric',
            'tw_documentos_id'=>'required|numeric'
        ];
    }

    function messages()
    {
        return [
            'tw_corporativos_id.required'=>'Debe seleccionar uno de los corporativos',
            'tw_documentos_id.required'=>'Debe seleccionar uno de los documentos',
            'tw_corporativos_id.numeric'=>'Debe ser valores numericos',
            'tw_documentos_id.numeric'=>'Debe ser valores numericos'
        ];
    }
}
