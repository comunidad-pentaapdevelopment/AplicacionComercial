@extends('layouts.admin')

@section('contenido')
<h1>Todos los Proveedores <a class="btn btn-success btn-xs" href="{{route('proveedor.create')}}">Nuevo</a></h1>
<table class="table">
	<thead>
		<tr>
			<th>
				Nombre
			</th>

			<th>
				Apellido
			</th>

			<th>
				Empresa
			</th>

			<th>
				Telefono
			</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($proveedores as $proveedor)
		<tr>
			<td>
				{{$proveedor->nombre}}
			</td>
			<td>
				{{$proveedor->apellido}}
			</td>
			<td>
				{{$proveedor->empresa}}
			</td>
			<td>
				{{$proveedor->telefono}}
			</td>
			

			<td>
				<a class="btn btn-warning btn-xs" href="{{route('proveedor.edit', $proveedor->id)}}">Editar</a>
				<form style="display: inline" method="POST" action="{{route('proveedor.destroy',$proveedor->id)}}">
					{!!csrf_field()!!}
					{!!method_field('DELETE')!!}
					<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
			
					
				</form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop