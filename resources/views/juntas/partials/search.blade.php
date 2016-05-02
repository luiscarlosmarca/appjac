
{!!Form::model(Request::all(),['route'=>'junta','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				<div class="form-group">
				    
				    {!!Form::text('barrio',null,['class'=>'form-control','placeholder'=>'El bario  de la junta:'])!!}
				    {!!Form::text('numResolucion',null,['class'=>'form-control','placeholder'=>'El numero de la resolucion del junta:'])!!}
				  	

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
{!!Form::close()!!}