@extends('layouts.admin')
@section('contenido')
@if(session()->has('info'))
<h3>{{session('info')}}</h3>
@else
<form method="POST" action="{{url('proveedor')}}">
	{{csrf_field()}}

<label for="nombre">
	Nombre:
	<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
	{!!$errors->first('nombre','<span class=error>:message</span>')!!}
</label>
<label for="apellido">
	Apellido:
	<input class="form-control" type="text" name="apellido" value="{{old('apellido')}}">
	{!!$errors->first('apellido','<span class=error>:message</span>')!!}
</label>
<label for="empresa">
	Empresa:
	<input class="form-control" type="text" name="empresa" value="{{old('empresa')}}">
	{!!$errors->first('empresa','<span class=error>:message</span>')!!}
</label>
<label for="telefono">
	Telefonos:
	<input class="form-control" type="text" name="telefono" value="{{old('telefono')}}">
	{!!$errors->first('telefono','<span class=error>:message</span>')!!}
</label>

<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endif
@stop