@extends('layout')
@section('title')
Editar Evento
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar evento</b></div>
				
				@include('error')

					{!!Form::model($evento,['route'=>['evento.update',$evento], 'method' => 'PATCH']) !!} 

								
								@include('eventos.partials.fields')
												
								
								
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
									 {!!Form::close() !!} 
									 <div class="col-sm-6">
									@include('eventos.partials.delete')

									</div>
								</div>


								
						
						  </div>
								
						
			
				</div>

</div>
@endsection