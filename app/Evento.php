<?php

namespace Appjac;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Evento extends Model
{
   protected $table = 'eventos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre','fecha','lugar','detalles'];

	public function scopeNombre($query,$nombre)
	{
	
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .'Resultado de la busqueda');	
		}
		
	}

	public static function filtro($nombre)
	{
			return Evento::nombre($nombre)
				
				
				->orderBy('created_at','ASC')
				->paginate(5);
	}
}
