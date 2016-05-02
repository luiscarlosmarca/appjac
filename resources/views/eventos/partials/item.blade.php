
<div class="jumbotron">
		  
		<div class="row">
		<div class="col-md-6">

		<span class="label label-default">Nombre del evento</span>
		  <h3>{{$evento->nombre}}</h3>
		  <span class="label label-success">Fecha:</span>
		  <p>{{$evento->fecha}}<br></p>
		   <span class="label label-success">Lugar:</span>
		  <p>{{$evento->lugar}}<br></p>
		   

		<p><a class="btn btn-primary btn-lg" href="{{route('evento.details',$evento->id)}}" role="button">Ver Detalles</a></p>
		



		</div>
		
		<div class="col-md-4">
		  	<a href="/upload/eventos/{{$evento->imagen}}.jgp" target="black"><img src="/upload/eventos/{{$evento->imagen}}.jpg" height="380" width="200"></a>
		</div>
	</div>

	

</div>

