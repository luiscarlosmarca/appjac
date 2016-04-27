@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-primary">
				<div class="panel-heading">Beneficiados de la Junta de Accion Comunal | App web JAC 1.0	</div>
					
					@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

				<div class="panel-body">
					@include('beneficiados.partials.search')
					@include('beneficiados.partials.table')
				</div>
			</div>
		
		</div>

			<p>
 						
 						</p>
	</div>
		<font color="black">
					Numero de Beneficiados es:
 					{{$beneficiados->total()}} 
 					
 			</font>	


</div>
 
@endsection

 

