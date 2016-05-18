<?php

namespace Appjac\Http\Controllers;

use Illuminate\Http\Request;
use Appjac\Evento;
use Appjac\Http\Requests;
use Appjac\Http\Controllers\Controller;
use Appjac\Http\Requests\CreateEventoRequest; 
use \Input as Input;
use Illuminate\Support\Facades\Session;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 
     */
    public function index(Request $request)
    {
        $eventos=Evento::filtro($request->get('nombre'));
        return view('eventos/index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventoRequest $request)
    {

        if(Input::hasFile('imagen'))
        {

            $file = Input::file('imagen');
            $file->move('upload/eventos',$file->getClientOriginalName());
            $image='img src="/upload/eventos'.$file->getClientOriginalName().'"';
                
            $eventos = new Evento($request->all());
            $eventos->imagen=$file->getClientOriginalName();
          
            $eventos->save();
       
      
                Session::flash('message',$eventos->nombre.' Fue creado');
            
                 return redirect()->route('inicio');
        }
      

        $evento=Evento::create($request->all());
         Session::flash('message',$evento->nombre.' Fue creado');
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
       $evento=Evento::findOrFail($id);
       return view('eventos/details',compact('evento'));
    }           
                 

           
       
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento=Evento::findOrFail($id);
       return view('eventos/edit',compact('evento'));
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
        $evento=evento::findOrFail($id);
        $evento->fill($request->all());
        $evento->save();

        Session::flash('message',$evento->full_name.' Se actualizo los datos');
        return redirect()->route('inicio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $evento = Evento::find($id);
 
        $evento->delete();
 
         Session::flash('message',$evento->full_name.'evento eliminado');
        return redirect()->route('inicio');
    }
}
