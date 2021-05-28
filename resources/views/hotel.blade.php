@extends('layouts.site')

@section('content')

<!-- ========== REVOLUTION SLIDER ========== -->
<div class="slider">
    <div id="rev-slider-6" class="rev_slider dotted-slider op8" style="display:none;" data-version="5.4.5">
      <ul>
        <!-- SLIDE 1 -->
        <li data-index="rs-411" data-transition="slideremovedown">
          <!-- MAIN IMAGE -->
          <img src="{{ asset('frontend/images/slider/hotel.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina="data-no-retina">
          <!-- LAYER NR. 1 -->
          <div
            class="tp-caption tp-resizeme"
            data-x="center"
            data-hoffset="['0','0','0','0']"
            data-y="middle"
            data-voffset="-40"
            data-fontsize="['80','60','50','50']"
            data-lineheight="['62','90','70','60']"
            data-whitespace="nowrap"
            data-responsive_offset="on"
            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
            style="z-index: 99; color: #fff; font-weight: 600;font-family:Fira Sans;">EL HOTEL
          </div>
          <!-- LAYER NR. 2 -->
          <div
            class="tp-caption tp-resizeme"
            data-x="['center','center','center','center']"
            data-hoffset="['-60','-50','-50','-50']"
            data-y="middle"
            data-voffset="['85','55','45','45']"
            data-fontsize="['40','35','30,'30']"
            data-lineheight="['30','25','20','20']"
            data-whitespace="nowrap"
            data-responsive_offset="on"
            data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
            style="z-index: 11; color: #333333; font-weight: 400; ">
            <a href="#contacto" class="btn slider">
              Reservar
            </a>
          </div>
          <!-- LAYER NR.3 -->
          <div
            class="tp-caption tp-resizeme"
            data-x="['center','center','center','center']"
            data-hoffset="['80','80','60','60']"
            data-y="middle"
            data-voffset="['85','55','45','45']"
            data-fontsize="['40','35','30,'30']"
            data-lineheight="['30','25','20','20']"
            data-whitespace="nowrap"
            data-responsive_offset="on"
            data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
            style="z-index: 11; color: #333333; font-weight: 400; ">
            <a href="{{ route('hotel') }}#contacto" class="btn slider">
              Contacto
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

      <!-- ========== SERVICES ========== -->
      <section class="services" id="servicios">
          <div class="container">
            <div class="section-title animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
              <h4>NUESTROS SERVICIOS</h4>
              <p class="section-subtitle">El concepto de una oferta de alojamiento "boutique" no podría completarse sin el aditamento de servicios que sólo un hotel de lujo puede ofrecer. Por ello Panacea cuenta con las siguientes prestaciones de exclusividad:</p>
            </div>
            <div class="row">
              <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                  <figure class="">
                    <img src="{{ asset('frontend/images/services/desayuno.jpg')}}" class="img-fluid" alt="Image">
                    <figcaption>
                      <!-- <h4>Restaurant</h4> -->
                    </figcaption>
                  </figure>
                  <figure class="">
                    <img src="{{ asset('frontend/images/services/gym.jpg')}}" class="img-fluid" alt="Image">
                    <figcaption>
                      <!-- <h4>Spa</h4> -->
                    </figcaption>
                  </figure>
                  <figure class="">
                    <img src="{{ asset('frontend/images/services/entretenimiento.jpg')}}" class="img-fluid" alt="Image">
                    <figcaption>
                      <!-- <h4>Conference Room</h4> -->
                    </figcaption>
                  </figure>
                  <figure class="">
                    <img src="{{ asset('frontend/images/services/spa.jpg')}}" class="img-fluid" alt="Image">
                    <figcaption>
                      <!-- <h4>Swimming Pool</h4> -->
                    </figcaption>
                  </figure>
              </div>
            </div>
            <div class="col-lg-5 col-12">
              <div class="owl-thumbs animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s" data-slider-id="services">
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="icon-bread"></i>
                  </span>
                  <div class="media-body">
                    <h5>Desayuno Personalizado</h5>
                    <p>El huésped podrá elegir el contenido de su desayuno, la hora y el lugar que mas le guste del hotel para disfrutarlo</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="icon-wifi"></i>
                  </span>
                  <div class="media-body mb-3 mt-3">
                    <h5>WI FI</h5>
                    <p>Gratuito en todo el hotel</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="icon-pool"></i>
                  </span>
                  <div class="media-body mb-3 mt-3">
                    <h5>Piscina</h5>
                    <p>Piscina exterior con solárium húmedo y seco</p>
                  </div>
                </div>
                <div class="owl-thumb-item ">
                  <span class="media-left">
                    <i class="icon-jacuzzi-1"></i>
                  </span>
                  <div class="media-body mb-3 mt-3">
                    <h5>Jacuzzi</h5>
                    <p>Jacuzzi exterior climatizado</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <!-- mobile --> 
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".1s">
                  <span class="media-left">
                    <i class="icon-gym"></i>
                  </span>
                  <div class="media-body">
                    <h5>Gimnasio</h5>
                    <p>Salón equipado para que puedas continuar con tu rutina diaria</p>
                  </div>
                </div>
              <!-- Card Flip -->
              <div class="info-card d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-gym"></i>
                      <div class="text">Gimnasio </div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt30">Salón equipado para que puedas continuar con tu rutina diaria </p>
                  </div>
                </div>
              </div>
              <!-- End Card Flip -->
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                <span class="media-left">
                  <i class="icon-room-service"></i>
                </span>
                <div class="media-body">
                  <h5>Room service</h5>
                  <p>De 07:00hs a 23:00 hs</p>
                </div>
              </div>
              <!-- Card Flip -->
              <div class="info-card w-100 d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".4s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-room-service"></i>
                    <div class="text">Room service </div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt45">De 07:00hs a 23:00 hs </p>
                  </div>
                </div>
              </div>
              <!-- End Card Flip -->
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".3s">
                <span class="media-left">
                  <i class="icon-spa"></i>
                </span>
                <div class="media-body">
                  <h5>Espacio de relax y belleza</h5>
                  <p>Tratamientos faciales y corporales</p>
                </div>
              </div>
              <div class="info-card w-100 d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".6s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-spa"></i>
                      <div class="text">Espacio de relax y belleza </div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt40">Tratamientos faciales y corporales </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <!-- mobile -->
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".4s">
                <span class="media-left">
                  <i class="icon-horse"></i>
                </span>
                <div class="media-body">
                  <h5>Entretenimiento</h5>
                  <p>El huésped tendrá a su disposición: Juegos de mesa, Netbook y DVD con películas a elección</p>
                </div>
              </div>
              <!-- escritorio -->
              <div class="info-card d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".8s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-horse"></i>
                    <div class="text mt-1">Entretenimiento </div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt25">El huésped tendrá a su disposición: Juegos de mesa, Netbook y DVD con películas a elección</p>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <!-- mobile -->
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".5s">
                <span class="media-left">
                  <i class="icon-parking"></i>
                </span>
                <div class="media-body">
                  <h5 class="mt30">Cocheras</h5>
                  <!-- <p>El huésped tendrá a su disposición: Juegos de mesa, Netbook y DVD con películas a elección</p> -->
                </div>
              </div>
              <!-- escritorio -->
              <div class="countup-box box-shadow-005 animated fadeInUp wow d-none d-sm-block" data-wow-offset="30" data-wow-delay="1s">
                <i class="icon-parking"></i>
                <div class="text">Cocheras</div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <!-- mobile -->
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".6s">
                <span class="media-left">
                  <i class="icon-support"></i>
                </span>
                <div class="media-body">
                  <h5>Asesoramiento</h5>
                  <p>Excursiones y circuitos turísticos en la Villa y el valle</p>
                </div>
              </div>
              <!-- escritorio -->
              <div class="info-card d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.2s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-support"></i>
                      <div class="text">Asesoramiento</div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt40">Excursiones y circuitos turísticos en la Villa y el valle</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-3 col-12">
              <div class="owl-thumb-item d-lg-none border-0 mb-4 animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".7s">
                <span class="media-left">
                  <i class="icon-thermometer"></i>
                </span>
                <div class="media-body">
                  <h5>Aire y calefacción</h5>
                  <p>Aire acondicionado y calefacción central</p>
                </div>
              </div>
              <div class="info-card w-100 d-none d-sm-block">
                <div class=" animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.4s">
                  <div class="front countup-box box-shadow-005">
                    <i class="icon-thermometer"></i>
                    <div class="text">Aire y calefacción </div>
                  </div>
                  <div class="back countup-box box-shadow-005">
                    <p class="text mt40">Aire acondicionado y calefacción central</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>

      @if(!is_null($ad))
      <!-- ========== SPA ========== -->
      <section id="promocion">
        <div class="container">
          <div class="box-shadow image-bg parallax gradient-overlay "  data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0" >
            <div class="row mb-5">
              <div class="col-lg-6 spa">
                <div class="mb20 p-5">
                  <h3>{{ $ad->title }}</h3>
                  <!-- <a href="spa.html" class="view-all uppercase">Disfrutá el Verano con Nosotros</a> -->
                  <div style="color: white !important;">
                    {!! $ad->description !!}
                  </div>

                  <a href="#contacto" class="btn view-all">
                    <i class="fa fa-bed"></i>RESERVAR
                  </a>
                </div>
              </div>
              <div class="col-lg-6" id="promotion" style="background:url(frontend/images/slider/bg-hero.jpg);background-size:cover;    background-position: center;">
                <!-- <img src="images/bg-hero.png" class="img-fluid"alt=""> -->
              </div>
              
            </div>
          
          </div>
        </div>
      </section>
      @endif

      <!-- ========== GALLERY ========== -->
      <section class="gallery pt-0" id="hotel">
        <div class="container">
          <div class="section-title animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
            <h4>Nuestro Hotel</h4>
            <!-- <a href="gallery.html" class="view-all">View gallery images</a> -->
          </div>
          <div class="gallery-owl owl-carousel image-gallery animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/1.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/1.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/2.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/2.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/3.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/3.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/4.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/4.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/5.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/5.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/slider/bg-hero2.png')}}">
                  <img src="{{ asset('frontend/images/slider/bg-hero2.png')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/7.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/7.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/8.jpg')}}">
                  <img src="{{ asset('frontend/images/rooms/superior2.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/9.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/9.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/services/gym.jpg')}}">
                  <img src="{{ asset('frontend/images/services/gym.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/GYM.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/GYM.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/14.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/14.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="galeria image-icon">
                <a href="{{ asset('frontend/images/gallery/15.jpg')}}">
                  <img src="{{ asset('frontend/images/gallery/15.jpg')}}" alt="Image">
                </a>
              </figure>
            </div>
          </div>
        </div>
      </section>
      
      <section class="video np parallax " data-src="{{ asset('frontend/images/slider/bg-hero2.png')}}" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay op6">
          <div class="container">
            <div class="video-popup">
              <a class="popup-vimeo" href="https://www.youtube.com/watch?v=qwqqeg9B3u4">
              <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
        <a href="https://www.youtube.com/channel/UC36Emn-qALFXBomuLzt0Ijw" target="_blank" class="btn btn-light view-all">
          <i class="fa fa-video-camera"></i>Ver más videos
        </a>
      </section>     

      
      <!-- ========== ROOMS ========== -->
      <section class="rooms" id="habitaciones">
        <div class="container">
          <div class="section-title animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
            <h4>Nuestras Habitaciones</h4>
            <p class="section-subtitle">Cuartos con características de excelencia y una identidad definida. Una identidad individual definida con características de exelencia</p>
            <!-- <a href="gallery.html" class="view-all">View gallery images</a> -->
          </div>
          <div class="row">
            <!-- ITEM -->
            <div class="col-md-6">
              <div class="room-grid-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".4s">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ route('superior') }}">
                    <img src="{{ asset('frontend/images/rooms/estandar.jpg')}}" class="img-fluid" alt="Image">
                  </a>
                  <div class="room-services">
                    <i class="fa fa-glass" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Frigobar"></i>
                    <i class="fa fa-bed" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Sommier king size 2x1.8"></i>
                    <i class="fa fa-desktop" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="TV Led 32"></i>
                    <i class="fa fa-fire" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Secador de cabello"></i>
                  </div>
                  <!-- <div class="room-price">€89 / night</div> -->
                </figure>
                <div class="room-info">
                  <h2 class="room-title mb-4">
                    <a href="{{ route('estandar') }}">SUITE ESTÁNDAR</a>
                  </h2>
                  <a href="#contacto" class="btn view-all">
                      <i class="fa fa-bed"></i>RESERVAR
                  </a>
                  <a href="{{ route('estandar') }}" class="btn btn-outline view-all">
                      Más Info
                  </a>
                  <!-- <p>Enjoy our single room</p> -->
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-6">
              <div class="room-grid-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".6s">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ route('superior') }}">
                    <img src="{{ asset('frontend/images/rooms/superior.jpg')}}" class="img-fluid" alt="Image">
                  </a>
                  <div class="room-services">
                    <i class="fa fa-glass" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Frigobar"></i>
                    <i class="fa fa-bed" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Sommier king size 2x2"></i>
                    <i class="fa fa-lock" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Caja de seguridad"></i>
                    <i class="fa fa-shower" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Jacuzzi en la habitación"></i> 
                  </div>
                  <!-- <div class="room-price">€129 / night</div> -->
                </figure>
                <div class="room-info">
                  <h2 class="room-title mb-4">
                    <a href="{{ route('superior') }}">SUITE SUPERIOR</a>
                  </h2>
                  <a href="#contacto" class="btn view-all">
                      <i class="fa fa-bed"></i>RESERVAR
                  </a>
                  <a href="{{ route('superior') }}" class="btn btn-outline view-all">
                      Más Info
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <!-- ========== OFFERS ========== -->
      <section class="offers pb-3" id="eventos">
        <div class="container">
          <div class="row">
            <!-- ITEM -->
            <div class="col-md-12">
              <div class="section-title animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.2s">
                <h4>Eventos y reuniones</h4>
                <p class="section-subtitle">Con una ubicación privilegiada, a 100 mtrs del centro de la ciudad, Panacea Hotel Boutique es el lugar ideal para realizar su evento. Contamos con un equipo altamente especializado, el cual se encargara de todos sus pedidos antes de su reunión o evento y durante el transcurso del mismo. El equipo de Panacea Hotel Boutique le brindará el asesoramiento necesario para organizar todo tipo de eventos especiales, congresos, convenciones, capacitaciones, cocktails, bodas, y fiestas.</p>
                <!-- <a href="offers.html" class="view-all">View all offers</a> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="offer-item animated fadeInRight wow" data-wow-offset="30" data-wow-delay="1.2s">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="" data-toggle="modal" data-target="#myModal">
                    <img src="{{ asset('frontend/images/offers/empresarial.jpg')}}" class="img-fluid" alt="Image">
                  </a>
                </figure>
                <!-- <div class="ribbon">
                  <span>HOT OFFER</span></div> -->
                <!-- <div class="offer-price uppercase">
                  5 nights for €1,875
                </div> -->
                <h3 class="offer-title">
                  <a href="#contacto">Empresarial</a>
                </h3>
                <h3 class="offer-button">
                  <div type="" class="booking" data-toggle="modal" data-target="#myModal">
                        Más Info
                  </div>
                </h3>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-6">
              <div class="offer-item animated fadeInRight wow" data-wow-offset="30" data-wow-delay="1.2s">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="" data-toggle="modal" data-target="#myModal">
                    <img src="{{ asset('frontend/images/offers/social1.jpg')}}" class="img-fluid" alt="Image">
                  </a>
                </figure>
                <!-- <div class="ribbon">
                  <span>HOT OFFER</span></div> -->
                <!-- <div class="offer-price uppercase">
                  8 nights for €2,000
                </div> -->
                <h3 class="offer-title">
                  <a href="#contacto">Social</a>
                </h3>
                <h3 class="offer-button">
                  <div type="" class="booking" data-toggle="modal" data-target="#myModal">
                       Más Info
                  </div>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ========== CONTACT ========== -->
      <section class="contact" id="contacto">
        <div class="container">
          <div class="section-title animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.2s">
            <h4>CONTACTO</h4>
            <!-- <p class="section-subtitle">Get in touch</p> -->
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="google-map animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.2s">
                <div id="map-canvas"></div>
                <div class="toggle-streetview" id="openStreetView">
                  <i class="fa fa-street-view" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-items animated fadeInUp wow" data-wow-offset="30" data-wow-delay="1.2s">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="contact-item">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <h6>Islas Malvinas 151, Villa General Belgrano, Córdoba</h6>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <div class="contact-item">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <h6>(03546) 464818</h6>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <div class="contact-item">
                      <i class="fa fa-envelope"></i>
                      <h6>info@panaceahotel.com</h6>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    
                    <form id="contact-form" name="contact-form" action="{{ route('contact') }}" method="post">
                      {{ csrf_field() }}
                      <div class="row no-padding">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <input class="form-control" name="name" placeholder="Nombre" type="text" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <input class="form-control" name="email" type="email" placeholder="Email" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <input class="form-control" name="phone" type="text" placeholder="Teléfono" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" placeholder="Consulta"></textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-fw" type="submit">
                              <i class="fa fa-location-arrow"></i>
                              Enviar
                            </button>
                          </div>
                        </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>	
@include('layouts.footer')
@include('booking-button')
@include('modal-reservas')
@endsection