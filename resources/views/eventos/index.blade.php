@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Eventos e información general  </div>
				<div class="panel-body">
					@if (Auth::user())	
						<div class="alert alert-info" role="alert">
					
							<a href="{{route('evento.create')}}"class="btn btn-primary">
								Crear un nuevo evento
							</a>
						</div>
					@endif
					
					@if (Session::has('message'))

							<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

					
						@include('eventos.partials.search')
						

					
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
