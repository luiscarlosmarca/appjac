<table class="table table-hover" >
 			<tr>
 								
 				 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre Completo</th>
 				 <th><font color=#2D4259 size="4" face="Lucida grande"> <center>Cedula</th>
 				
 								
 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Fecha de residencia</th>
				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Direccion</th>	
							 

 				<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Acciones</th>	
								
 								

 							
 			</tr>
 								
 			@foreach ($beneficiados as $beneficiado)
 			<tr>
 					<td>{{$beneficiado->full_name}}</td>
 					<td>{{$beneficiado->cedula}}</td>
 					<td><center>{{$beneficiado->feResidencia}}</center></td>
 					<td>{{$beneficiado->direccion}}</td>
 								 						
 				   <td>
 									
 						<a href="{{route('beneficiado.detail',$beneficiado)}}"><img src="/upload/detalles.png" height="50" width="50" alt="Ver detalles"></a>
 						<a  href="{{route('beneficiado.certificado',$beneficiado)}}"><img src="/upload/pdf.jpg" height="50" width="50" alt="Generar Certificado"></a>
 				    </td>
 								
 			</tr>

 				
 		@endforeach
 </table>

{!!$beneficiados->render()!!}