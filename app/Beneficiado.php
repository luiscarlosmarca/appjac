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
	public function scopeBarrio($query,$barrio)
	{
		
		if (trim($barrio) != "")
		{
		$query->where(\DB::raw("CONCAT(barrio)"),"LIKE","%$barrio%");
		}
			
		
	}

    public function getfullnameAttribute()
	{
		return $this->nombres.' 	'.$this->apellidos;
	}

	public static function filter($nombre,$barrio,$cedula)
		{
			return Beneficiado::nombre($nombre)
				->barrio($barrio)
				->cedula($cedula)
				->orderBy('nombres','ASC')
				->paginate();
		}
	
}
