<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class Junta extends Model
{


	protected $table = 'juntas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['barrio','nombre','numResolucion','nit','feResolucion','nombreP','nombreS','presidenteCC','ciudadCCP','secretariaCC','direccionSede','telefono'];
	
    public function beneficiados()
    {
        // una junta puede tener muchos afiliados
        return $this->hasMany('App\Beneficiado');
    }

    public function scopeBarrio($query,$barrio)
	{
	
		if (trim($barrio) != "")
		{
		$query->where(\DB::raw("CONCAT(barrio)"),"LIKE","%$barrio%");
		Session::flash('message','El barrio:'.' '.$barrio.'  ' .' Resultado de la busqueda');	
		}
		
	}


	public function scopeNumResolucion($query,$numResolucion)
	{
	
		if (trim($numResolucion) != "")
		{
		$query->where(\DB::raw("CONCAT(numResolucion)"),"LIKE","%$numResolucion%");
		Session::flash('message','El numero de Resoulucion :'.' '.$numResolucion.'  ' .' Resultado de la busqueda');	
		}
		
	}

public static function buscador($barrio,$numResolucion)
	{
			return Junta::barrio($barrio)
				
				->numResolucion($numResolucion)
				->orderBy('nombre','ASC')
				->paginate();
	}

}
