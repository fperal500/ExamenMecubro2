@extends('layouts.plantilla') 


@section("cabecera")

LISTA DE CONTACTOS


@endsection
@section("contenido")
<div class="container">
	<table id="contacto" class="table" border="1">

		<thead>
			<input type ='button' class="btn btn-warning"  value = 'Añadir Contactos' onclick="location.href = '{{ route('contactos.create') }}'"/>
			<tr>
		 		<td>Nombre</td>
	 			<td>Apellido</td>
		 		<td>Telefono</td>
    	        <td>Fecha de Nacimiento</td>
    	        <td>pais</td>
	@foreach($contacto as $contactos)
			<tr>
				<td> <a href="{{route('contactos.edit' , $contactos->id)}} "> {{$contactos->nombre}} </a></href> </td>
				<td> {{$contactos->apellido}} </td> 
				<td> {{$contactos->telefono}}</td> 
				<td> {{$contactos->Fecha_Nacimiento}}</td>
				<td> {{$contactos->pais}}</td>
			</tr>
		</thead>
	
</div>
	@endforeach

	


</table>
	


	<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
	<script src="https://cdn.datables./1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datables./1.10.19/js/jquery.dataTables.bootstrap4.js"></script>

	


@endsection
