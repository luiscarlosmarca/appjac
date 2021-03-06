@extends('layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login | App web JAC 1.0</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Por favor corrige los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
							    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
						    	{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Iniciar seccion
								</button>

								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
