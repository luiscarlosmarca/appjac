<div class="col-sm-6">

<div class="form-group"><br>
							{!!Form::label('Nombr', 'Nombre') !!}
					   		{!!Form::text('nombres',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>

			
<div class="form-group"><br>

							{!!Form::label('Apellidos', 'Apellidos') !!}
					   		{!!Form::text('apellidos',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>
		

  <div class="form-group">

					
							{!!Form::label('Fena', 'Fecha de Nacimiento') !!}
					   		{!!Form::text('feNa',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>

<div class="form-group">
						{!!Form::label('Cedula', 'Cedula') !!}
						{!!Form::text('cedula' ,null,['class'=>'form-control floating-label']) !!}
 </div>

 </div>
<div class="col-sm-6">
  <div class="form-group">

					
							{!!Form::label('Ciudadcc', 'Ciudad de expedición de la Cedula') !!}
					   		{!!Form::text('ciudadCC',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>
 
<div class="form-group">

					
							{!!Form::label('Dirección', 'Direccion') !!}
					   		{!!Form::text('direccion',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>

 <div class="form-group">

					
							{!!Form::label('Telefono', 'Telefono') !!}
					   		{!!Form::text('telefono',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>

<div class="form-group">

					
							{!!Form::label('casa', 'Casa Propia') !!}
					   		{!!Form::text('casaPropia',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>


<div class="form-group">

					
							{!!Form::label('feresidencia', 'Fecha de Residencia') !!}
					   		{!!Form::text('feResidencia',null,['class'=>'form-control floating-label','requiered']) !!}
 </div>


  </div>
Recibo del servicio publico
<p>
<a href="/upload/beneficiado/{{$beneficiado->reciboServicio}}.jpg" target="black">
<img src="/upload/beneficiado/{{$beneficiado->reciboServicio}}.jpg" height="200" width="500">
</a>
<img src="/upload/logo.png">
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
																

{{-- observaciones --}}
