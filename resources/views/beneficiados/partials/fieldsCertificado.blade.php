
<img src="./upload/logo.png" alt="logo" width="89" height="112" style="float: left;" /><p style="text-align: center;">JUNTA DE ACCION COMUNAL {{$beneficiado->junta->nombre}}</p>
<p style="text-align: center;">Personer&iacute;a Jur&iacute;dica No. {{$beneficiado->junta->numResolucion}} de {{$beneficiado->junta->feResolucion}}</p>
<p style="text-align: center;">Nit:{{$beneficiado->junta->nit}}</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<center><h1><strong>Certifica</strong></p></h1></center>
<p align="justify">Que&nbsp; el señor(a) <b>{{$beneficiado->full_name}}</b>, identificado con&nbsp; la c&eacute;dula de ciudadan&iacute;a No. <b>{{$beneficiado->cedula}}</b> de {{$beneficiado->ciudadCC}}, lo conozco como residente en la {{$beneficiado->junta->barrio}}, desde hace ({{$beneficiado->age}}) a&ntilde;os. Trabajador, serio, responsable y de excelente conducta. Es apreciado y respetado por toda la comunidad.</p>
<p>&nbsp;</p>
<p>La presente solicitud se expide en la ciudad de La Dorada (Caldas), en la fecha de {{$beneficiado->hoy}}.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Coordialmente</p>
<p>&nbsp;</p>

<p>_____________________________</p>
<p><b>{{$beneficiado->junta->nombreP}}</b></p>
<p>{{$beneficiado->junta->presidenteCC}}  de {{$beneficiado->junta->ciudadCCP}} </p>
<p>Presidente junta de Acci&oacute;n Comunal de la {{$beneficiado->junta->nombre}}</p>
<p>Cel: {{$beneficiado->junta->telefono}}</p>
<p>&nbsp;</p>
























