@extends('layout')
@section('title')
Detalles de las Juntas de Accion Comunal
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Detalles de la junta del barrio: <b>{{$junta->barrio}}</b></div>
				
				@include('error')

					{!!Form::model($junta,['route'=>['junta.update',$junta], 'method' => 'PATCH']) !!} 

								
								@include('juntas.partials.fields')
												
								
								
								
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
									 {!!Form::close() !!} 
									 

									</div>
								</div>


								
						
						  </div>
								
						
			
				</div>

</div>
@endsection