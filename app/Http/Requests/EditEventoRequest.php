<?php

namespace Appjac\Http\Requests;

use Appjac\Http\Requests\Request;

class EditEventoRequest extends Request
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
            'detalles'      =>'required',
            'lugar'         =>'required|string',
            'imagen'        =>'mimes:jpeg,bmp,png',
            'fecha'         =>'required|date'
        
        ];
    }
}
