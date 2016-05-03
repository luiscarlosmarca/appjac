
<div class="jumbotron">
		  
		<div class="row">
		<div class="col-md-6">

		<span class="label label-default">Nombre del evento</span>
		  <h3>{{$evento->nombre}}</h3>
		  <span class="label label-default">Fecha:</span>
		  <p>{{$evento->fecha}}<br></p>
		   <span class="label label-default">Lugar:</span>
		  <p>{{$evento->lugar}}<br></p>
		   

		<p><a class="btn btn-primary btn-lg" href="{{route('evento.details',$evento->id)}}" role="button">Ver Detalles</a></p>
		@if (Auth::user())
		<p><a class="btn btn-primary btn-lg" href="{{route('evento.edit',$evento->id)}}" role="button">Gestionar</a></p>
		@endif
					
		



		</div>
		
		<div class="col-md-4">
		  	<a href="/upload/eventos/{{$evento->imagen}}" target="black"><img src="/upload/eventos/{{$evento->imagen}}" height="380" width="200"></a>
		</div>
	</div>

	

</div>

