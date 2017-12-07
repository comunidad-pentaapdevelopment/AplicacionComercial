@extends ('layouts.admin')

@section('contenido')

	<h1>Editar Empresa : {{$empresa->descripcion}}</h1>
		<form method="POST" action="{{url('empresa',$empresa->id)}}">
			{!!method_field('PUT')!!}
	{{csrf_field()}}
	 
<label for="descripcion">
	Descripción:
	<input class="form-control" type="text" name="descripcion" value="{{$empresa->descripcion}}">
	{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@stop