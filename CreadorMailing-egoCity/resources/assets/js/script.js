var app = new Vue({
  el: '#app',
  data: {
    urlInit: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1506135486/header_v4ynaj.png',
    urlImgstatic: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1506136826/banner-3_ztmftu.png',
    urlpubl1: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1515783471/banner-scruff_idbngl.png',
    altpubl1: '',
    ciudades: {
      ciudad1: {
        numero: 1,
        name: 'MEDELLIN',
        img: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1519388119/danger-min_zye8zk.png',
        evento: 'Danger',
        lugar: 'Industry Club',
        fecha: 'Viernes 23 de Febrero',
        pageEvent: 'https://guiagay.com.co/evento/industry-club-medellin-danger/'
      },
      ciudad2: {
        numero: 2,
        name: 'BOGOTÁ',
        img: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1519388124/mozo-min_n4sthf.png',
        evento: 'Mozo Terrace',
        lugar: 'El Mozo Club',
        fecha: 'Domingo 24 de Febrero',
        pageEvent: 'https://guiagay.com.co/evento/mozo-club-mozo-terrace/'
      },
      ciudad3: {
        numero: 3,
        name:  'BOGOTÁ',
        img: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1519388123/scruff-min_dqtr8u.png',
        evento: 'Scruff Party',
        lugar: 'Theatron',
        fecha: 'Sábado 24 de Febrero',
        pageEvent: 'https://guiagay.com.co/evento/scruff-party/'
      },
      ciudad4: {
        numero: 4,
        name: 'CALI',
        img: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1519388124/industry-cali_vr13vb.png',
        evento: 'Exotic Friday',
        lugar: 'Industry Club',
        fecha: 'Viernes 23 de Febrero',
        pageEvent: 'https://guiagay.com.co/evento/industry-club-cali-exotic-friday/'
      }
    },
    urlpubli2: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1518125788/1logo-el-eden_vgup6k.png',
    textNegrita: '¡Te invitamos a visitarnos!',
    textInvitacion: 'Somos el primer hotel especializado en la comunidad LGBT, con turismo de montaña y café en Colombia, donde las experiencias serán para recordar y siempre repetir.',
    textLlamado: 'Click aquí',
    Urlllamado: 'http://gayfriendlyeledenhotel.com/servicios#reservaplan',
    cclgbtco: 'https://res.cloudinary.com/ducui0e0x/image/upload/v1506138024/65e2f9e3-7775-4375-acde-24a79c1ac68b_up7gbf.png'
  },
  methods: {
    setdatos() {

    }

  }
})
