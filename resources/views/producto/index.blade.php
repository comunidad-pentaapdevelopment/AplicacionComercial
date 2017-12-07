@extends('layouts.admin')

@section('contenido')
<h1>Todos los Productos <a class="btn btn-success btn-xs" href="{{route('producto.create')}}">Nuevo</a></h1>
<table class="table">
	<thead>
		<tr>
			<th>
				Descripcion
			</th>
			<th>
				Codigo
			</th>
			<th>
				Codigo de Barras
			</th>

			<th>
				Precio de Costo
			</th>

			<th>
				Precio Publico
			</th>

			<th>
				Stock
			</th>

			<th>
				Empresa
			</th>

			<th>
				Categoria
			</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>
				{{$producto->descripcion}}
			</td>
			<td>{{$producto->codigo}}</td>
			<td>{{$producto->codigo_barra}}</td>
			<td>{{$producto->precio_costo}}</td>
			<td>{{$producto->precio_publico}}</td>
			<td>{{$producto->stock}}</td>
			<td>{{$producto->company_id}}</td>
			<td>{{$producto->category_id}}</td>
			<td>
				<a class="btn btn-warning btn-xs" href="{{route('producto.edit', $producto->id)}}">Editar</a>
				<form style="display: inline" method="POST" action="{{route('producto.destroy',$producto->id)}}">
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