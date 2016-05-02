<table class="table table-hover" >
 			<tr>
 				<th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>id</th>
 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Barrio</th>
 				<th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre</th>
 			
 				
 								
 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Numero de resolucion</th>
				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Presidente (a)</th>	
							 

 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Acciones</th>	
								
 								

 							
 			</tr>
 								
 			@foreach ($juntas as $junta)
 			<tr>	<center>
 			 		<td><center>{{$junta->id}}</td>
 			 		<td><center>{{$junta->barrio}}</td>
 					<td><center>{{$junta->nombre}}</td>
 					
 					<td><center>{{$junta->numResolucion}}</td>
 					<td><center>{{$junta->nombreP}}</td>
 												
 				   <td>
 									
 						<a href="{{route('junta.detail',$junta)}}"><img src="/upload/detalles.png" height="50" width="50" alt="Ver detalles"></a>
 						
 				    </td>
 								
 			</tr>

 				
 		@endforeach
 </table>

{!!$juntas->render()!!}