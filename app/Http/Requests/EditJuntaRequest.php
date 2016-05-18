<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditJuntaRequest extends Request
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
            
            'nombre'        =>'required|string',
            'nombreP'       =>'required|string',
            'nombreS'       =>'required|string',
           
            
            'barrio'        =>'required|string',
            'direccionSede' =>'required',
            'presidenteCC'   =>'required|integer',
            
            'secretariaCC'   =>'required|integer'
            
            ];
             
    }
}
