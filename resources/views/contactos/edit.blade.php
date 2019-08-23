 @extends('layouts.plantilla') 


@section("cabecera")


EDITAR REGISTROS


@endsection

@section("contenido")


<!--form method="post" action="/contactos/{{$contacto->id}}"-->

{!!Form::model($contacto, ['method'=>'POST', 'action'=>['ContactoController@update',$contacto->id]])!!}

<table>

	<tr>
		<td>Nombre: </td>
		<td>
			<input type="text" name="nombre" placeholder="Ingrese su Nombre" value= "{{$contacto->nombre}}"> 

		</td>
			{{csrf_field()}}

			<input type="hidden" name="_method" value="PUT">

	</tr>

	<tr>
		<td>Apellido: </td>
		<td>
			<input type="text" name="apellido" placeholder="Ingrese su apellido" value="{{$contacto->apellido}}">
			
		</td>
	</tr>
	<tr>
		<td>Telefono: </td>
		<td>
			<input type="text" name="telefono" placeholder="Ingrese su Telefono" value="{{$contacto->telefono}}">
				
		</td>
	</tr>
	<tr>
		<td>Fecha Nacimiento: </td>
		<td>
	<input type="date" name="Fecha_Nacimiento" placeholder="Ingrese su Fecha Nacimiento" value="{{$contacto->Fecha_Nacimiento}}">
			
		</td>
	</tr>
	<tr>
		<td>
	 		<select id="miSelect" name="pais" value="{{$contacto->Pais}}">

	 			<option value=""  selected> - Seleccione un pais -  </option>
	 		</select>
		</td>
	</tr>

	<tr>
		<td>
			<input type="submit" name="enviar" placeholder="Editar Contacto" value="Editar Contacto" a href="{{ route('contactos.index') }}">
		</td>
	</tr>
	
</table>
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

<!--form method="post" action="/contactos/{{$contacto->id}}"-->

{!!Form::open(['method'=>'DELETE', 'action'=>['ContactoController@destroy',$contacto->id]])!!}
	
	{{csrf_field()}}
			<input type="hidden" name="_method" value="DELETE">

			<input type="submit" name="enviar" placeholder="Editar Contacto" value="Eliminar Contacto" a href="{{ route('contactos.index') }}">
		{!!Form::close()!!}
<!--/form-->

 @endsection
