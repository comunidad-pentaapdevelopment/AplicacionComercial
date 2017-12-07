@extends('layouts.admin')
@section('contenido')
@if(session()->has('info'))
<h3>{{session('info')}}</h3>
@else
<form method="POST" action="{{url('categoria')}}">
	{{csrf_field()}}
<label for="descripcion">
	Descripción:
	<input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}">
	{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endif
@stop