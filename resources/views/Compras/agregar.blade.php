@extends('plantilla')

@section('contenido')

<form action="{{ route('productos.guardar') }} " method="POST" enctype="multipart/form-data">
  @csrf
  <div class="col-md-11">
    <div class="form-grup">
      <label for="">Productos</label>
      <select name="productos_id" id="productos_id" class="form-control">
        <option value="">--Seleccione un Producto--</option>
        @foreach($produc as $product)
        <option value="{{$product['nombre']}} ">{{ $product['nombre'] }}- Q{{ $product['precio'] }}</option>
        @endforeach