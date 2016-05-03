{!!Form::open (['route'=> ['evento.destroy', $evento->id],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este evento?')"class="btn btn-danger">Eliminar evento</button>
{!! Form::close()!!}