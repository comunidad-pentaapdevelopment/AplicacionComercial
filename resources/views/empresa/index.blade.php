@extends('layouts.admin')

@section('contenido')
<h1>Todas las Empresas <a class="btn btn-success btn-xs" href="{{route('empresa.create')}}">Nuevo</a></h1>
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
		@foreach($empresas as $empresa)
		<tr>
			<td>
				{{$empresa->descripcion}}
			</td>
			<td>
				<a class="btn btn-warning btn-xs" href="{{route('empresa.edit', $empresa->id)}}">Editar</a>
				<form style="display: inline" method="POST" action="{{route('empresa.destroy',$empresa->id)}}">
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