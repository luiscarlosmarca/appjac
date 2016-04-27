
{!!Form::model(Request::all(),['route'=>'beneficiado','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				<div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Beneficiado:'])!!}
				    {!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Cedula del Beneficiado:'])!!}
				  	{!!Form::text('barrio',null,['class'=>'form-control','placeholder'=>'Nombre del barrio:'])!!}
 			 				

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
{!!Form::close()!!}