{!!Form::open (['route'=> ['beneficiado.destroy', $beneficiado->id],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este beneficiado?')"class="btn btn-danger">Eliminar beneficiado</button>
{!! Form::close()!!}