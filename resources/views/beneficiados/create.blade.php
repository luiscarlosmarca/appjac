@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Creando un Nuevo Beneficiado</h1> </div>
				<div class="panel-body">
					@include('error')
				{!!Form::open(['route'=>'beneficiado.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}

						<div class="col-sm-6">
						<div class="form-group">
									{!!Form::label('Cedula', 'Cedula') !!}
							   		{!!Form::text('cedula',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>
						 </div>
						 <div class="col-sm-6">
						 <div class="form-group">
									{!!Form::label('ciudad', 'Ciudad de la Cedula') !!}
							   		{!!Form::text('ciudadCC',null,['class'=>'form-control floating-label','requiered']) !!}
						 </div>
						  </div>

						@include('beneficiados.partials.fields')
						
						{!! Form::label('image','Imagen del recibo publico del domicilio')!!}
						{!! Form::file('reciboPublico',null,['class'=>'form-control'])!!}
						Suba una imagen JPG O PNG MAX 2MB	<br>
						<button type="submit" class="btn btn-primary">
											Crear Beneficiado
						</button>

									
				{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>

@endsection
