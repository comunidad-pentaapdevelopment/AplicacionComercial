@extends ('layouts.admin')

@section('contenido')

	<h1>Editar Proveedor : {{$proveedor->nombre}}</h1>
		<form method="POST" action="{{url('proveedor',$proveedor->id)}}">
			{!!method_field('PUT')!!}
	{{csrf_field()}}
	 
<label for="nombre">
	Nombre:
	<input class="form-control" type="text" name="nombre" value="{{$proveedor->nombre
	}}">
	{!!$errors->first('nombre','<span class=error>:message</span>')!!}
</label>
<label for="apellido">
	Apellido:
	<input class="form-control" type="text" name="apellido" value="{{$proveedor->apellido
	}}">
	{!!$errors->first('apellido','<span class=error>:message</span>')!!}
</label>
<label for="empresa">
	Empresa:
	<input class="form-control" type="text" name="empresa" value="{{$proveedor->empresa
	}}">
	{!!$errors->first('empresa','<span class=error>:message</span>')!!}
</label>
<label for="telefono">
	Telefono:
	<input class="form-control" type="text" name="telefono" value="{{$proveedor->telefono
	}}">
	{!!$errors->first('telefono','<span class=error>:message</span>')!!}
</label>
<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@stop