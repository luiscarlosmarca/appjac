@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Eventos e información general  </div>
				<div class="panel-body">
				<div class="alert alert-info" role="alert">
					<a href="{{route('evento.create')}}"class="btn btn-primary">
						Crear un nuevo evento
					</a>
					
					
					

				</div>
				<br>
				@foreach($eventos as $evento)
				@include('eventos/partials/item',compact('evento'))
				@endforeach
				</div>
					{!!$eventos->render()!!}
			</div>
		</div>
	</div>
</div>
@endsection
