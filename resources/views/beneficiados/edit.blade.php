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
					
									 
								
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Actualizar datos</button>
								</div>

								
						 {!!Form::close() !!} 
						  </div>
								
						
			
				</div>

</div>
@endsection