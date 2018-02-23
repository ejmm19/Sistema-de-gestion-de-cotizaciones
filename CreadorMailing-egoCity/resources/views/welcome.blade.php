@extends('layouts.app')
@section('section')
  <div class="container mt-5 mb-5" id="app">
    {{-- <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506135486/header_v4ynaj.png" class="mx-auto d-block" alt=""> --}}
    <h4>Creación de Mailing Semanal egoCity</h4>
    <div class="row">
      <div class="col-lg-5">
        <form v-on:submit.prevent>
          <div class="form-group">
            <input v-model="urlpubl1" type="text" class="form-control" placeholder="URL" name="urlpublicidad1">
            <small class="form-text text-muted">Url del primer banner publicitario 728 x 90 px</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control texto-alterno" placeholder="Textp previo"  v-model="altpubl1" name="textoprevio">
            <small class="form-text text-muted">Texto de previsualización en el mail (Bandeja de entrada)</small>
          </div>
          <hr>
            <div class="form-group row ciudades" v-for="ciudad in ciudades">
              <div class="col-lg-3">
                <label for="">Ciduad @{{ ciudad.numero }} </label>
              </div>
              <div class="col-lg-9">
                <input v-model="ciudad.name" type="text" class="form-control" :placeholder="'Ciudad ' + ciudad.numero" :name="'ciudad'+ciudad.numero">
              </div>
              <div class="col-lg-12 mt-2">
                <input v-model="ciudad.img" type="text" class="form-control" placeholder="Url de la imagen del Evento" :name="'imgciudad'+ciudad.numero">
              </div>
              <div class="col-lg-6 mt-2">
                <input v-model="ciudad.evento" type="text" class="form-control" placeholder="Nombre del evento" :name="'eventciudad'+ciudad.numero">
              </div>
              <div class="col-lg-6 mt-2">
                <input v-model="ciudad.lugar" type="text" class="form-control" placeholder="Lugar del evento" :name="'lugarciudad'+ciudad.numero">
              </div>
              <div class="col-lg-6 mt-2">
                <label for="">Fecha del Evento</label>
              </div>
              <div class="col-lg-6 mt-2">
                <input v-model="ciudad.fecha" type="text" class="form-control" :name="'fechaciudad'+ciudad.numero">
              </div>
              <div class="col-lg-12 mt-2 mb-3">
                <input v-model="ciudad.pageEvent" type="text" class="form-control texto-alterno" placeholder="Url del evento" :name="'pageEventciudad'+ciudad.numero">
              </div>
            </div>

          <hr>
          <div class="form-group row">
            <div class="col-lg-12">
              <input v-model="urlpubli2" type="text" class="form-control mb-3" placeholder="URL de imagen publicitario inferior">
              <input v-model="textNegrita" type="text" class="form-control mb-3" placeholder="Texto en negrita (Llamado)">
            </div>
            <div class="col-lg-12">
              <textarea v-model="textInvitacion" name="name" class="form-control mb-3" rows="4" cols="80" placeholder="Texto de envitación"></textarea>
            </div>
            <div class="col-lg-6">
              <input v-model="textLlamado" type="text" class="form-control mb-3" placeholder="Texto llamada acción">
            </div>
            <div class="col-lg-6">
              <input v-model="Urlllamado" type="text" class="form-control mb-3" placeholder="URL de acción">
            </div>
          </div>
          <button v-on:click="setdatos()" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="col-lg-7" id="siete-preview">

        <div class="preview" id="preview">
          @include('vista.mail')
        </div>
      </div>
    </div>
  </div>

@endsection
