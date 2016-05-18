<?php

namespace Appjac;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class Beneficiado extends Model
{
    protected $table="beneficiados";
	protected $fillable = ['nombres','apellidos','barrio','cedula','ciudadCC','direccion','telefono','feNa','feResidencia','reciboServicio','casaPropia','junta_id','entidad'];

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
   	return $this->hasOne('Appjac\Junta','id','junta_id');
   }

   public function getAgeAttribute()
	{
		
		return Carbon::parse($this->feResidencia)->age;
	}
	
	public function getHoyAttribute()
	{
		
		$date = Carbon::now();

		return  $date = $date->format(' jS \\ F Y ');
		
	}
}
