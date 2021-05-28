@extends('layouts.site')

@section('content')

  <!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-6" class="rev_slider dotted-slider op8" style="display:none;" data-version="5.4.5">
          <ul>
            <!-- SLIDE 1 -->
            <li data-index="rs-411" data-transition="slideremovedown">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend/images/rooms/superior2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina="data-no-retina">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['left','left','center','center']"
                data-hoffset="['40','40','0','0']"
                data-y="middle"
                data-voffset="-50"
                data-fontsize="['80','70','50','40']"
                data-lineheight="['100','90','70','60']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":500,"speed":750,"frame":"0","from":"x:[-60%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;rZ:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 99; color: #fff; font-weight: 900;">Suite Superior
              </div>

              <!-- Botón 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['left','left','center','center']"
                data-hoffset="['40','40','-60','-60']"
                data-y="middle"
                data-voffset="['55','55','45','45']"
                data-fontsize="['25','20','80,'80']"
                data-lineheight="['52','52','50','50']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1500,"speed":750,"frame":"0","from":"x:[-60%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;rZ:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #333333; font-weight: 400; ">
                <a href="#servicios" class="btn slider">
                 Ver Servicios
                </a>
              </div>

              <!-- Botón 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['left','left','center','center']"
                data-hoffset="['200','200','80','80']"
                data-y="middle"
                data-voffset="['50','50','45','45']"
                data-fontsize="['25','20','18,'18']"
                data-lineheight="['52','52','48','48']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1500,"speed":750,"frame":"0","from":"x:[-60%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;rZ:0","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #333333; font-weight: 400; ">
                <a href="{{ route('hotel') }}#contacto" target="_blank" class="btn-outline-slider-rooms">
                  <i class="fa fa-bed"></i> Reservar
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
     
      <!-- ========== MAIN ========== -->
      <main class="services" id="servicios">
        <div class="container">
          <div class="row">
            <div class="room col-lg-8 col-12">

              <div class="section-title">
                <h4>SERVICIOS DE LA SUITE</h4>
                <!-- <p class="section-subtitle">Single Room Includes</p> -->
              </div>
              <div class="mt-5">
                <div class="room-services-list">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="list-unstyled">
                        <li>
                        <i class="fa fa-check"></i>Frigobar</li>
                        <li>
                        <i class="fa fa-check"></i>Elección de almohadas</li>
                        <li>
                        <i class="fa fa-check"></i>WIFI</li>
                        <li>
                        <i class="fa fa-check"></i>Secador de pelo</li>
                        <li>
                        <i class="fa fa-check"></i>LED 32"</li>
                        <li>
                        <i class="fa fa-check"></i>Teléfono en la habitación</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="list-unstyled">
                        <li class="">
                        <i class="fa fa-check"></i>Jacuzzi en habitación</li>
                        <li>
                        <i class="fa fa-check"></i>Aire y calefacción</li>
                        <li class="">
                        <i class="fa fa-check"></i>Caja de seguridad</li>
                        <li class="">
                        <i class="fa fa-check"></i>Living</li>
                        <li class="">
                        <i class="fa fa-check"></i>Cama king size 2x2 mts </li>
                      </ul>
                    </div>
                   
                  </div>
                </div>
                
                
              </div>
              <div class="room-slider mt85">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('frontend/images/rooms/superior3.jpg') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/rooms/superior3.jpg') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('frontend/images/rooms/superior4.jpg') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/rooms/superior4.jpg') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('frontend/images/rooms/superior5.jpg') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/rooms/superior5.jpg') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <!-- <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/estandar6.jpg">
                        <img class="img-fluid" src="images/rooms/estandar6.jpg" alt="Image">
                      </a>
                    </figure>
                  </div> -->
                  
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src=" {{ asset('frontend/images/rooms/superior3.jpg') }}" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src=" {{ asset('frontend/images/rooms/superior4.jpg') }}" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src=" {{ asset('frontend/images/rooms/superior5.jpg') }}" alt="Image"></div>
                  <!-- ITEM -->
                  <!-- <div class="item"><img class="img-fluid" src="images/rooms/estandar6.jpg" alt="Image"></div> -->
                </div>
              </div>
            </div>
            <div class=" col-lg-4 col-12">
              <div class="sidebar">
                <aside class="widget noborder">
                  <div class="vertical-booking-form">
                      <div id="booking-notification" class="notification"></div>
                      <h3 class="form-title">Consulta</h3>
                      <div class="inner">
                          <form id="contact-form" name="contact-form" method="POST" action="{{ route('contact') }}">
                              {{ csrf_field() }}
                              <div class="row no-padding">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                      <input class="form-control" name="name" placeholder="Nombre" type="text">
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <input class="form-control" name="email" type="email" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input class="form-control" name="phone" type="text" placeholder="Teléfono">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <textarea class="form-control" name="message" placeholder="Consulta"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <button class="btn btn-fw" type="submit">
                                      <i class="fa fa-location-arrow"></i>Enviar</button>
                                  </div>
                                </div>
                            </form>
                      </div>
                    </div>
                </aside>
                <aside class="widget">
                  <h4 class="widget-title">Otra Habitación</h4>
                  <div class="latest-posts">
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="{{ route('estandar') }}">
                              <img src=" {{ asset('frontend/images/rooms/superior.jpg') }}" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="{{ route('estandar') }}">Suite<br>Estándar</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>                  
                  </div>
                </aside>

                <aside class="promo widget widget-help">
                  <h4 class="widget-title mb-4 text-white">{{ $ad->title }}</h4>
                  <a href="{{ route('hotel') }}#promocion" class="btn m-auto w-75 d-block">
                    Más Info</a>
                </aside>
              </div>
              
            </div>
          </div>
        </div>
      </main>

@include('layouts.footer')

@endsection