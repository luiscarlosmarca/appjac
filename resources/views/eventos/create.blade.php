@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un nuevo evento</h1> </div>
				<div class="panel-body">
					@include('error')
					{!!Form::open(['route'=>'evento.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
								
									
									
						
				
					

						
													{!!Form::label('Nombre', 'Nombre del Evento') !!}
											   		{!!Form::text('nombre',null,['class'=>'form-control floating-label','requiered']) !!}
					

						<div class="form-group">
													{!!Form::label('lugar', 'Lugar') !!}
											   		{!!Form::text('lugar',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>


					

						  <div class="form-group">

											
													{!!Form::label('Fena', 'Fecha AAAA-MM-DD') !!}
											   		{!!Form::text('fecha',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>

				  		<div class="form-group">

											
													{!!Form::label('detalles', 'Detalles') !!}
											   		{!!Form::textarea('detalles',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>


						 <div class="form-group">

						 	{!! Form::label('imagen','Imagen del evento')!!}
										{!! Form::file('imagen',null,['class'=>'form-control'])!!}
										Suba una imagen JPG O PNG MAX 2MB	<br>
						 </div>


																


									
									

						<p>
						<button type="submit" class="btn btn-primary">
								Crear evento
						</button>

									</p>
					{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>

@endsection
