@extends('layouts.plantilla') 



<title>LISTA DE CONTACTOS</title>
 
 <head>
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}"> 	
 </head>
 

@section("contenido")


{!! Form::open(array('url' => '/contactos', 'method'  => 'POST' )) !!}

	<tr>
		<td><br>{!!Form::label ('nombre', 'Nombre:' )	!!} </td> <br>
		
		<td>
			<!--input type="text" name="nombre" placeholder="Ingrese su Nombre"--> 

			<br>{!!Form::text('nombre')!!} <br>

			{{csrf_field()}}
		</td>
	</tr>

	<tr>
		<td> <br>{!!Form::label ('apellido', 'Apellido:' )	!!} </td> <br>
		<td>
			<!--input type="text" name="apellido" placeholder="Ingrese su apellido"-->

			<br>{!!Form::text('apellido')!!} <br>
			
		</td>
	</tr>
	<tr>
		<td>{!!Form::label ('telefono', 'Telefono:' )!!} </td> <br>
		<td>
			<!--input type="text" name="telefono" placeholder="Ingrese su Telefono"-->

			<br>{!!Form::text('telefono')!!} <br>
				
		</td>
	</tr>
	<tr>
		<td> <br> {!!Form::label ('Fecha_Nacimiento', 'Fecha_Nacimiento:' )!!} <br> </td>
		<td>
			<br><input type="date" class="form-control-file "name="Fecha_Nacimiento" placeholder="Ingrese su Fecha Nacimiento"><br>
			
		</td>
	</tr>
	<tr>
		<td>
	 		<br><select id="miSelect" name="pais" value="pais"><br>

	 		<br>	<option value=""  selected> - Seleccione un pais -  </option>
	 		</select>
		</td>
	</tr>

	<tr>
		<td>
			<br><input type="submit" name="enviar" placeholder="Añadir Contacto" value="enviar" a href="{{ route('contactos.index') }}"> <br>

		</td>
	</tr>
	
</table>

	 <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

		<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
	<script src="https://cdn.datables./1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datables./1.10.19/js/jquery.dataTables.bootstrap4.js"></script>	
	 
<!--/form-->
{!!Form::close()!!}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
	$(document).ready(function(){
	  	$.ajax({
		    url: 'https://api-test.mecubro.net/api/countries',
		    type: 'Get',
		    success: function(data){
		      $.each(data, function(e){
				$("#miSelect").append('<option value='+ data[e].name +'>' + data[e].name +' </option>')
		      });
		    }
	  	});
	});
</script>


