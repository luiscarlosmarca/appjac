
{!!Form::model(Request::all(),['route'=>'inicio','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				<div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'El nombre del evento'])!!}
				  
				  	

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
{!!Form::close()!!}