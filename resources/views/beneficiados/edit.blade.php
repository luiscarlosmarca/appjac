@extends('layout')
@section('title')
Detalles del Beneficiado
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Detalles del Beneficiado</div>
				
				@include('error')

						<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
						id, y tambien le mandamos  el id al metodo update -->
						
						{!!Form::model($beneficiado,['route'=>['beneficiado.detail',$beneficiado], 'method' => 'PUT']) !!} 
							
								@include('beneficiados.partials.fields')
					
								Recibo del servicio publico
									<p>
								<a href="/upload/beneficiado/{{$beneficiado->reciboServicio}}" target="black">
							<img src="/upload/beneficiado/{{$beneficiado->reciboServicio}}" height="500" width="300"> </a>

									<p>


									<div class="panel panel-danger">
									  <div class="panel-heading"><h2> Datos de la Accion Comunal</h2></div>
									  <div class="panel-body">

									   <p>
											Esta afiliado a la Accion comunal: {{$beneficiado->junta->nombre}}
										</p>

										<p>
											Del barrio: {{$beneficiado->junta->barrio}}
										</p>

										<p>
											Dirección de la sede: {{$beneficiado->junta->direccionSede}}
										</p>
										
										<p>
											Telefono: {{$beneficiado->junta->telefono}}
										</p>

									  </div>
									  <div class="panel-footer">Numero de resolución: {{$beneficiado->junta->numResolucion}}</div>
									</div>

								
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
								</div>

								
						 {!!Form::close() !!} 
						  </div>
								
						
			
				</div>

</div>
@endsection