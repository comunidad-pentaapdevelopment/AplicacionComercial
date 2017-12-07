@extends('layouts.admin')
@section('contenido')
@if(session()->has('info'))
<h3>{{session('info')}}</h3>
@else
<form method="POST" action="{{url('gasto')}}">
	{{csrf_field()}}
<label for="observacion">
	Observaciones
	<textarea class="form-control" name="observacion">{{old('observacion')}}</textarea>
	{!!$errors->first('observacion','<span class=error>:message</span>')!!}
</label> 

<label for="monto">
	Monto:
	<input class="form-control" type="text" name="monto" value="{{old('monto')}}">
	{!!$errors->first('monto','<span class=error>:message</span>')!!}
</label>

<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endif
@stop