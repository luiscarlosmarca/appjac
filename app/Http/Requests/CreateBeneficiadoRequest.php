<?php

namespace Appjac\Http\Requests;

use Appjac\Http\Requests\Request;

class CreateBeneficiadoRequest extends Request
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
            'nombres'       =>'required|string',
            'apellidos'     =>'required|string',
            'cedula'        =>'required|unique:beneficiados|integer',
            'ciudadCC'      =>'required',
            'feNa'          =>'required|date',
            'feResidencia'  =>'required|date',
            'direccion'     =>'required',
            'junta_id'      =>'required|exists:juntas,id'
        ];
    }
}
