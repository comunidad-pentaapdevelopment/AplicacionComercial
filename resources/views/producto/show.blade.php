@extends('layouts.admin')
@section('contenido')
<h1>Producto</h1>
<p>Descripcion: {{$producto->descripcion}} - {{$producto->Codigo}}</p>
<p>{{$producto->precio_publico}}</p>
@stop