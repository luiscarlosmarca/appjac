@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Evento: {{$evento->nombre}}</h1> </div>
				<div class="panel-body">

					
				</div>
				<div class="jumbotron">
		  
		   
					<div class="row">
						
						<div class="col-md-8">
							<span class="label label-default">Detalles</span>
							  <h3>{{$evento->detalles}}</h3>
							  <span class="label label-success">Lugar:</span>
							  <p>{{$evento->lugar}}<br></p>
							   <span class="label label-success">fecha:</span>
							  <p>{{$evento->fecha}}<br></p>
							  
							   
						</div>
							
							<div class="col-md-4">
							  	<a href="/upload/{{$evento->imagen}}.jgp" target="black"><img src="/upload/eventos/{{$evento->imagen}}.jpg" height="380" width="200"></a>
							</div>
						</div>

				</div>
				

		</div>
	</div>
</div>
@endsection
