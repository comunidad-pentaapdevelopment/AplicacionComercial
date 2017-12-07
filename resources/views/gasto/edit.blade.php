@extends ('layouts.admin')

@section('contenido')

	<h1>Editar Categoria : {{$categoria->descripcion}}</h1>
		<form method="POST" action="{{url('categoria',$categoria->id)}}">
			{!!method_field('PUT')!!}
	{{csrf_field()}}
	 
<label for="descripcion">
	Descripción:
	<input class="form-control" type="text" name="descripcion" value="{{$categoria->descripcion}}">
	{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@stop