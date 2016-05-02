<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Beneficiado;
use \Input as Input;
use App\Http\Requests\CreateBeneficiadoRequest; 
use App\Http\Requests\EditBeneficiadoRequest;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Support\Facades\Validator;
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
       return view('beneficiados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBeneficiadoRequest $request)
    { 

        if(Input::hasFile('reciboPublico'))
        {

            $file = Input::file('reciboPublico');
            $file->move('upload',$file->getClientOriginalName());
            $image='img src="/upload/beneficiado'.$file->getClientOriginalName().'"';
                
            $beneficiados = new Beneficiado($request->all());
            $beneficiados->reciboServicio=$file->getClientOriginalName();
          
            $beneficiados->save();
       
      
                Session::flash('message',$beneficiados->full_name.' Fue creado');
            
                 return redirect()->route('beneficiado');
        }
      
        $beneficiado=Beneficiado::create($request->all());
         Session::flash('message',$beneficiado->full_name.' Fue creado');
        return redirect()->route('beneficiado');
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
    public function destroy($id)
    {
        $beneficiado = Beneficiado::find($id);
 
        $beneficiado->delete();
 
         Session::flash('message',$beneficiado->full_name.'Beneficiado eliminado');
        return redirect()->route('beneficiado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBeneficiadoRequest $request,$id)
    {

    $beneficiado=Beneficiado::findOrFail($id);
    $beneficiado->fill($request->all());
    $beneficiado->save();

    Session::flash('message',$beneficiado->full_name.' Se actualizo los datos');
    return redirect()->route('beneficiado');

    }
public function details($id)
    {
        $beneficiado=Beneficiado::findOrFail($id);
        

        return view('beneficiados.edit',compact('beneficiado'));
    }
}
