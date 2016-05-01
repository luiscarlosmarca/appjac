<p style="text-align: center;"><strong><span style="font-size: 12pt;">REPUBLICA DE COLOMBIA</span></strong></p>
<p style="text-align: center;"><strong><span style="font-size: 12pt;"> DEPARTAMENTO DE CALDAS<br /></span></strong></p>
<p style="text-align: center;"><strong><span style="font-size: 12pt;"> MUNICIPIO DE LA DORADA</span></strong></p>


									 		<center><img src="./upload/logo.png"  height="100" width="100">	</center>

<p><span style="font-size: 12pt;"> JUNTA DE ACCION COMUNAL <b> {{$beneficiado->junta->nombre}}</b> del Barrio <b>{{$beneficiado->junta->barrio}}</b>  con  numero de resoulución <b>{{$beneficiado->junta->numResolucion}} </b>del año <b>{{$beneficiado->junta->feResolucion}}
</b>
</span></p>

<p style="text-align: center;"><strong><span style="font-size: 12pt;">&nbsp;EL SUSCRITO PRESIDENTE DE LA JUNTA DE ACCION COMUNAL</span></strong></p>


<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><span style="font-size: 12pt;"><strong> CERTIFICA:</strong> </span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="font-size: 12pt;">Que el se&ntilde;or(a)  <b>{{$beneficiado->full_name}}</b> identificado con c&eacute;dula de ciudadan&iacute;a No. <b>{{$beneficiado->cedula}}</b> expedida en <b>{{$beneficiado->ciudadCC}}</b>, ejerce la posesi&oacute;n quieta, pacifica e ininterrumpida desde hace aproximadamente <b>{{$beneficiado->age}}</b> a&ntilde;os, sobre un predio ubicado en la dirección <b>{{$beneficiado->direccion}}</b>  de jurisdicci&oacute;n del municipio. La presente certificaci&oacute;n se expide a solicitud verbal del interesado para ser presentada en: <B>{{$beneficiado->entidad}}</B>. En constancia se expide y se firma en la sede ubicadad en la dirección <b>{{$beneficiado->junta->direccionSede}}</b> del municipio del municipio de La Dorada con fecha: {{$beneficiado->hoy}}.
<p style="text-align: justify;">&nbsp;</p>
<p>&nbsp;</p>


_____________________________________________________
<p><strong><span style="font-size: 12pt;">Presidente(a) de la Junta de Acci&oacute;n Comunal CC. No.</span></strong></p>
{{$beneficiado->junta->nombreP}}<br>
CC:0{{$beneficiado->junta->presidenteCC}}

<br><br><br>
______________________________________________________
<p><strong><span style="font-size: 12pt;">Secretario(a) de la Junta de Acci&oacute;n Comunal CC. No.</span></strong></p>
{{$beneficiado->junta->nombreS}}<br> 
CC:{{$beneficiado->junta->secretariaCC}}




