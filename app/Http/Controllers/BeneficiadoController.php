<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Beneficiado;
use \Input as Input;
//use App\Http\Requests\CreateCanchaRequest; validaciones
//use App\Http\Requests\EditCanchaRequest;   valideaciones
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;

class BeneficiadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        
        $beneficiados= Beneficiado::filter($request->get('nombre'),$request->get('cedula'));

         return view ('beneficiados.index', compact('beneficiados'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function certificado($id)
    {

        $beneficiado=Beneficiado::findOrFail($id);
        $pdf = PDF::loadView('beneficiados.certificado',compact('beneficiado'));
        return $pdf->stream();


    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
public function details($id)
    {
        $beneficiado=Beneficiado::findOrFail($id);
        

        return view('beneficiados.edit',compact('beneficiado'));
    }
}
