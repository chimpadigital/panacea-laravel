<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Panacea - Hotel Boutique</title>
    <meta name="description" content="Panacea Hotel un lugar de placer y buen gusto para cumplir tus deseos más exigentes en el corazon de villa general belgrano"/>
    <meta name="keywords" content="hotel, panacea hotel, villa general belgrano, cordoba, córdoba, argentina, valle de calamuchita, panacea, cabaña, cabañas, turismo, alojamiento"/>
    <meta content="" name="author">
    <meta name="theme-color" content="#c5263b">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/favicon-apple.png')}}"/>
    <link rel="icon" href="{{ asset('frontend/images/favicon.png')}}">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{ asset('frontend/fonts/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/fonts/flaticon.css')}}" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,700,900|Fira+Sans:300,600,700,800" rel="stylesheet">

    @if(isset($ad))
    <style type="text/css">
        .promo.widget.widget-help {
          background: url({{ Storage::disk('public')->url($ad->img) }});
          background-size: cover;
          background-color: #c5263b;
          background-blend-mode: multiply;
        }
    </style>
    @endif
  </head>
  <body>
    <!-- ========== PRELOADER ========== -->
    <!-- <div class="loader loader3">
      <div class="loader-inner">
        <div class="spin">
          <span></span>
          <img src="images/logo.png" alt="Panacea Hotel">
        </div>
      </div>
    </div> -->
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div id="wrapper" class="wrapper">
      <!-- ========== HEADER ========== -->
      <header class="vertical-header open-header" data-menutoggle="992">
          <div class="container d-lg-block d-flex justify-content-between">
              <!-- BRAND -->
              <div class="brand">
                <div class="logo">
                  <!-- NORMAL LOGO -->
                  <a href="{{ route('/') }}" class="big-logo">
                    <img src="{{ asset('frontend/images/logo.png')}}" alt="Panacea Hotel">
                  </a>
                  <!-- MOBILE LOGO -->
                  <a href="{{ route('/') }}" class="mobile-logo">
                    <img src="{{ asset('frontend/images/logo_b.png')}}" alt="Panacea Hotel">
                  </a>
                </div> 
              </div>
              <a href="tel:+5403546464818">
                <i class="d-lg-none d-sm-block fa-2x mt20 fa fa-phone"></i>
              </a>
            <div id="toggle-menu-button" class="toggle-menu-button">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
            <!-- MAIN MENU -->
            <nav id="main-menu" class="main-menu">
              <ul class="menu">
                <li class="menu-item active">
                  <a href="{{ route('/') }}">Bienvenido</a>
                </li>
                <li class="menu-item dropdown">
                  <a href="{{ route('hotel') }}">El Hotel</a>
                  <ul class="submenu">
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}">El Hotel</a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}#servicios">Servicios</a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}#habitaciones">Habitaciónes</a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}#eventos">Eventos</a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}#promocion">Promociones</a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('hotel') }}#contacto">Contacto</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a href="{{ route('habitaciones') }}">Habitaciones</a>
                  <ul class="submenu">
                    <li class="menu-item">
                      <a href="{{ route('superior') }}">Suite Superior</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ route('estandar') }}">Suite Estándar</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="{{ route('hotel') }}#promocion">Promociones</a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('hotel') }}#contacto">Contacto</a>
                </li>
                <li class="menu-item menu-btn">
                  <a href="{{Route('hotel')}}#contacto" class="btn">
                  <i class="fa fa-bed"></i>
                 RESERVAR</a>
                </li>
                <div class="contact-menu">
                  <li class="menu-item border-top pl-4 pt-5">
                    <img src="{{ asset('frontend/images/placeholder.svg')}}" class="menu float-left mr-3 mb-3" alt="">
                    <h3 class="text-left">Islas Malvinas 151</h3>
                    <!-- <h4>Islas Malvinas 151</h4> -->
                    <p class="text-left">Villa General Belgrano<br>Córdoba</p>
                  </li>
                  <li class="menu-item pl-4 pt-4">
                    <img src="{{ asset('frontend/images/telephone.svg')}}" class="menu float-left mr-3 mb-3" alt="">
                    <a href="tel:+5403546464818">
                      <h3 class="text-left">(03546) 464818</h3>
                    </a>
                  </li>
                  <div class="social-media mt-4 ml-4 w-100">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/panaceahotelboutique">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="https://twitter.com/PanaceaHotel">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="https://plus.google.com/u/0/116558172853807147779">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/panacea.hotel.boutique/">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </ul>
            </nav>
          </div>
        </header>
      
      <!-- ========== CONTENT ========== -->

      @yield('content')


    </div>
  

    <div class="popup-booking-form" id="close">
      
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <a class="d-md-none d-lg-none d-block text-center wp" href="https://api.whatsapp.com/send?phone=+5493571667455&amp;text=Buenos%20días,%20quiero%20mas%20info">
        <i class="fa fa-whatsapp text-center fa-2x hidden-md hidden-lg"></i>
    </a>

    <a class="d-none d-sm-none d-lg-block text-center wp" target="_blank" href="https://web.whatsapp.com/send?phone=+5493571667455&amp;text=Buenos%20días,%20quiero%20mas%20info">
        <i class="fa fa-whatsapp text-center fa-2x hidden-xs hidden-sm"></i>
    </a>
     <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDhEyVIpZkLIOmevqa0XxzEpNQJuZmH6sE"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.mmenu.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.inview.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.thumbs.min.js')}}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/countup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/moment.min.js')}}"></script>
    <script src="{{ asset('frontend/js/daterangepicker.js')}}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{ asset('frontend/js/smoothscroll.min.js')}}"></script>
    <script src="{{ asset('frontend/js/instafeed.min.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
  </body>
</html>