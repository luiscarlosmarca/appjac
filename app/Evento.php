<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
		$query->where(\DB::raw("CONCAT(nombres)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
		
	}

	public static function filter($nombre)
	{
			return Beneficiado::nombre($nombre)
				
				
				->orderBy('created_at','ASC')
				->paginate(5);
	}
}
