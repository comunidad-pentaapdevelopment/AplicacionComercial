@extends('layouts.admin')

@section('contenido')
<h1>Todas las Categorias <a class="btn btn-success btn-xs" href="{{route('categoria.create')}}">Nuevo</a></h1>
<table class="table">
	<thead>
		<tr>
			<th>
				Descripcion
			</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categorias as $categoria)
		<tr>
			<td>
				{{$categoria->descripcion}}
			</td>
			<td>
				<a class="btn btn-warning btn-xs" href="{{route('categoria.edit', $categoria->id)}}">Editar</a>
				<form style="display: inline" method="POST" action="{{route('categoria.destroy',$categoria->id)}}">
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