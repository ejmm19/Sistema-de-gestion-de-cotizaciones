@extends('layouts.app2')

@section('content')

<form action="" >
    <div class="col-lg-6">
        <legend>Encabezado</legend>
    <div class="form-group col-lg-12">
      <label for="Dirigido">Dirigido a:</label>
      <input type="text" class="form-control" id="dirigidoa">
      <small class="form-text text-muted">Hacia quien va dirigido el formato</small>
    </div>
     <div class="form-group col-lg-6">
        <label >Persona</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-lg-6">
      <label >Referencia</label>
      <input type="text" class="form-control">
    </div>

    </div>
    <div class="col-lg-6 varios">
        <legend>Descripciones</legend>
        <div class="descripcion form-group">
            <input type="text" class="form-control n-nombre" placeholder="Nombre">
            <textarea class="form-control n-descripcion" placeholder="Descripcion" rows="3"></textarea>
        </div>
    </div>
<a id="add-name" class="btn btn-success">+</a>
<a id="add-descripcion" class="btn btn-success">+</a>





</form>


@endsection
