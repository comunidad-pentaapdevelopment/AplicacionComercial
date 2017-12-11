@extends('layouts.admin')

@section('contenido')
<h1>Todos los Gastos <a class="btn btn-success btn-xs" href="{{route('gasto.create')}}">Nuevo</a></h1>
<table class="table">
	<thead>
		<tr>
			<th>
				Observacion
			</th>

			<th>
				Monto
			</th>

			<th>
				fecha
			</th>

			<th>
				Usuario
			</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($gastos as $gasto)
		<tr>
			<td>
				{{$gasto->observacion}}
			</td>
			<td>
				{{$gasto->monto}}
			</td>
			<td>
				{{$gasto->created_at}}
			</td>
			<td>
				{{$gasto->user_id}}
			</td>
			

			<td>
				<a class="btn btn-warning btn-xs" href="{{route('gasto.edit', $gasto->id)}}">Editar</a>
				<form style="display: inline" method="POST" action="{{route('gasto.destroy',$gasto->id)}}">
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