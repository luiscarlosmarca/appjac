<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Beneficiado extends Model
{
    protected $table="beneficiados";
	protected $fillable = ['nombres','apellidos','barrio','cedula','ciudadCC','direcion','telefono','feNa','feResidencia','reciboServicio','casaPropia',''];

	public function scopeNombre($query,$nombre)
	{
	
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombres)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
		
	}

	public function scopeCedula($query,$cedula)
	{
		
		if (trim($cedula) != "")
		{
		$query->where(\DB::raw("CONCAT(cedula)"),"LIKE","%$cedula%");
		}
			
		
	}
	

    public function getfullnameAttribute()
	{
		return $this->nombres.' 	'.$this->apellidos;
	}

	public static function filter($nombre,$cedula)
	{
			return Beneficiado::nombre($nombre)
				
				->cedula($cedula)
				->orderBy('nombres','ASC')
				->paginate();
	}

	public function junta()
   {
   	//El beneficiado esta afiliado a una junta
   	return $this->hasOne('App\Junta','id','junta_id');
   }
	
}
