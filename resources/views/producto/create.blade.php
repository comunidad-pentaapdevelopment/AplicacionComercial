@extends('layouts.admin')
@section('contenido')
@if(session()->has('info'))
<h3>{{session('info')}}</h3>
@else
<form method="POST" action="{{url('producto')}}">
	{{csrf_field()}}
<label for="descripcion">
	Descripción:
	<input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}">
	{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
</label>
<label for="codigo">
	Código:
	<input class="form-control" type="text" name="codigo" value="{{old('codigo')}}">
	{!!$errors->first('codigo','<span class=error>:message</span>')!!}
</label>
<label for="codigo_barra">
	Código de Barras:
	<input class="form-control" type="text" name="codigo_barra" value="{{old('codigo_barra')}}">
	{!!$errors->first('codigo_barra','<span class=error>:message</span>')!!}
</label>
<label for="precio_costo">
	Precio de Costo:
	<input class="form-control" type="text" name="precio_costo" value="{{old('precio_costo')}}">
	{!!$errors->first('precio_costo','<span class=error>:message</span>')!!}
</label>
<label for="precio_publico">
	Precio Publico:
	<input class="form-control" type="text" name="precio_publico" value="{{old('precio_publico')}}">
	{!!$errors->first('precio_publico','<span class=error>:message</span>')!!}
</label>
<label for="stock">
	Stock:
	<input class="form-control" type="text" name="stock" value="{{old('stock')}}">
	{!!$errors->first('stock','<span class=error>:message</span>')!!}
</label>
<label for="category_id">
	Categoria:
	<input class="form-control" type="text" name="category_id" value="{{old('category_id')}}">
	{!!$errors->first('category_id','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endif
@stop