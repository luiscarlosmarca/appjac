<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Junta extends Model
{


	protected $table = 'juntas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre'];
	
    public function beneficiados()
    {
        // una junta puede tener muchos afiliados
        return $this->hasMany('App\Beneficiado');
    }

}
