@extends ('layouts.admin')

@section('contenido')

	<h1>Editar Producto : {{$producto->descripcion}}</h1>
		<form method="POST" action="{{url('producto',$producto->id)}}">
			{!!method_field('PUT')!!}
	{{csrf_field()}}
	 
<label for="descripcion">
	Descripción:
	<input class="form-control" type="text" name="descripcion" value="{{$producto->descripcion}}">
	{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
</label>
<label for="codigo">
	Código:
	<input class="form-control" type="text" name="codigo" value="{{$producto->codigo}}">
	{!!$errors->first('codigo','<span class=error>:message</span>')!!}
</label>
<label for="codigo_barra">
	Código de Barras:
	<input class="form-control" type="text" name="codigo_barra" value="{{$producto->codigo_barra}}">
	{!!$errors->first('codigo_barra','<span class=error>:message</span>')!!}
</label>
<label for="precio_costo">
	Precio de Costo:
	<input class="form-control" type="text" name="precio_costo" value="{{$producto->precio_costo}}">
	{!!$errors->first('precio_costo','<span class=error>:message</span>')!!}
</label>
<label for="precio_publico">
	Precio Publico:
	<input class="form-control" type="text" name="precio_publico" value="{{$producto->precio_publico}}">
	{!!$errors->first('precio_publico','<span class=error>:message</span>')!!}
</label>
<label for="stock">
	Stock:
	<input class="form-control" type="text" name="stock" value="{{$producto->stock}}">
	{!!$errors->first('stock','<span class=error>:message</span>')!!}
</label>
<label for="category_id">
	Categoria:
	<input class="form-control" type="text" name="category_id" value="{{$producto->category_id}}">
	{!!$errors->first('category_id','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@stop