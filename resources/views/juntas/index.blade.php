@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-primary">
				<div class="panel-heading">Listado de Juntas de Accion comunal | App web JAC 1.0	</div>
					
					@if (Session::has('message'))

						<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

					@if (Auth::user())	
						
							<div class="alert alert-info" role="alert">
						
								<a href="{{route('junta.create')}}"class="btn btn-primary">
									Crear una nueva junta
								</a>
							</div>

						@endif


				<div class="panel-body">
					
						@include('juntas.partials.search')
						@include('juntas.partials.table')
				</div>
			</div>
		
		</div>

			<p>
 						
 						</p>
	</div>
		<font color="black">
					Numero de juntas es:
 					{{$juntas->total()}} 
 					
 			</font>	


</div>
 
@endsection

 

