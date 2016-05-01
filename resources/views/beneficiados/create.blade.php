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

								@include('beneficiados.partials.fields')
					
								{!! Form::file('reciboPublico',null,['class'=>'form-control'])!!}
								<p class="help-block">Agregar Recibo Publico Imagenes 2kb .jpg y .png.</p>
				<p>
					<button type="submit" class="btn btn-primary">
						Crear Beneficiado
					</button>

				</p>
				{!! Form::close() !!}

					</div>
			</div>
		</div>
	</div>
</div>
@endsection
