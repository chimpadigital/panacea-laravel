@extends('layouts.site')

@section('content')
 <!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-6" class="rev_slider dotted-slider op8" style="display:none;" data-version="5.4.5">
          <ul>
            <!-- SLIDE 1 -->
            <li data-index="rs-411" data-transition="slideremovedown">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend/images/slider/bg-hero.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina="data-no-retina">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="middle"
                data-voffset="-40"
                data-fontsize="['80','60','40','40']"
                data-lineheight="['62','90','70','60']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 99; color: #FED88F; font-weight: 600;font-family:Fira Sans;">HOTEL BOUTIQUE
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="middle"
                data-voffset="['25','25','0','0']"
                data-fontsize="['35','30','25,'25']"
                data-lineheight="['43','25','30','30']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #ffffff; font-weight: 400; ">Villa General Belgrano, Córdoba.
              </div>

              <!-- LAYER NR.3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['18','0','0','0']"
                data-y="middle"
                data-voffset="['85','55','45','45']"
                data-fontsize="['40','35','38,'38']"
                data-lineheight="['30','25','20','20']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #333333; font-weight: 400; ">
                <!-- <a href="{{ route('hotel') }}#promocion" class="btn slider">
                  15% OFF RESERVA ONLINE
                </a> -->
              </div>
            </li>
            <!-- SLIDE 2 -->
            <li data-index="rs-412" data-transition="slideremovedown">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('frontend/images/slider/entrada.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina="data-no-retina">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="middle"
                data-voffset="-40"
                data-fontsize="['80','60','40','40']"
                data-lineheight="['62','90','70','60']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 99; color: #FED88F; font-weight: 600;font-family:Fira Sans;">HOTEL BOUTIQUE
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="middle"
                data-voffset="['25','25','0','0']"
                data-fontsize="['35','30','25,'25']"
                data-lineheight="['43','25','30','30']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #ffffff; font-weight: 400; ">Villa General Belgrano, Córdoba.
              </div>

              <!-- LAYER NR.3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['18','0','0','0']"
                data-y="middle"
                data-voffset="['85','55','45','45']"
                data-fontsize="['40','35','38,'38']"
                data-lineheight="['30','25','20','20']"
                data-whitespace="nowrap"
                data-responsive_offset="on"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11; color: #333333; font-weight: 400; ">
                <!-- <a href="{{ route('hotel') }}#promocion" class="btn slider">
                  15% OFF RESERVA ONLINE
                </a> -->
              </div>
            </li>
          </ul>
        </div>
      </div>
@endsection