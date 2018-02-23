<div id="mail">
  <img :src="urlInit" :alt="altpubl1" :title="altpubl1" width="100%">
  <img :src="urlpubl1" alt="" width="100%">
  <img :src="urlImgstatic" width="100%">
  <div class="row mt-3" id="ciudad">
      <div class="col-lg-3" v-for="ciudad in ciudades">
        <h4 class="ciudad-name">@{{ ciudad.name }}</h4>
        <img :src="ciudad.img" alt="" width="100%" class="mb-2">
        <p><b>Evento: </b>@{{ ciudad.evento }}</p>
        <p><b>Lugar: </b>@{{ ciudad.lugar }}</p>
        <p><b>Fecha: </b>@{{ ciudad.fecha }}</p>
        <a href="#" target="_blank" class="btn btn-danger">Página del Evento</a>
      </div>
  </div>
  <hr class="my-5">
  <div class="row">
    <div class="col-lg-4 mb-3">
      <img :src="urlpubli2" alt="" width="100%">
    </div>
    <div class="col-lg-8 mb-3" id="text-llamada">
      <h5><b>@{{ textNegrita }}</b></h5>
      <p class="my-3">@{{ textInvitacion }}</p>
      <p>@{{ textLlamado }}</p>
    </div>

      <div class="col-lg-7">
        <div class="col-lg-4">
          <img :src="cclgbtco" alt="">
        </div>
      </div>
      <div class="col-lg-5" id="paginas-contacto">
        <p><a href="https://egocitymgz.com/">www.egocitymgz.com</a></p>
        <p><a href="mailto:cuentas@egocitymgz.com">cuentas@egocitymgz.com</a></p>
        <p>Medellín - Colombia</p>
        <p>Carrera 70 # 30A - 144</p>
      </div>
  </div>
  <hr>
  <div class="d-flex justify-content-center">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138095/twitter_2x_tcdst0.png" class="mx-1" width="30px" height="30px">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138095/facebook_2x_mqmryp.png" class="mx-1" width="30px" height="30px">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138095/linkedin_2x_zfhzc6.png" class="mx-1" width="30px" height="30px">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138096/youtube_2x_mh9ayi.png" class="mx-1" width="30px" height="30px">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138095/googleplus_2x_wenvtt.png" class="mx-1" width="30px" height="30px">
    <img src="https://res.cloudinary.com/ducui0e0x/image/upload/v1506138095/tumblr_2x_fizfgd.png" class="mx-1" width="30px" height="30px">
  </div>
</div>
