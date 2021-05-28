<!-- ========== FOOTER ========== -->
<!-- <a class="d-md-none d-lg-none d-block text-center wp" href="https://api.whatsapp.com/send?phone=+5493571667455&amp;text=Buenos%20días,%20quiero%20mas%20info">
    <i class="fa fa-whatsapp text-center fa-2x hidden-md hidden-lg"></i>
</a>

<a class="d-none d-sm-none d-lg-block text-center wp" target="_blank" href="https://web.whatsapp.com/send?phone=+5493571667455&amp;text=Buenos%20días,%20quiero%20mas%20info">
    <i class="fa fa-whatsapp text-center fa-2x hidden-xs hidden-sm"></i>
</a> -->
      <footer>
        <div class="footer-widgets">
          <div class="container">
            <div class="row">
              <!-- WIDGET -->
              <div class="col-md-2">
                  <div class="footer-widget text-center">
                    <img src="{{asset('frontend/images/logo.png')}}" class="footer-logo" alt="Hotel Himara">
                    <div class="inner">
                        <div class="tripadvisor-banner">
                          <span class="review">Recomendado</span>
                          <img src="{{asset('frontend/images/icons/tripadvisor.png')}}" alt="Image">
                        </div>
                    </div>
                  </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-6">
                  <div class="footer-widget">
                   
                    <div class="inner">
                      <ul class="latest-posts">
                        <li>
                            <i class="fa fa-map-marker float-lg-left mb-3 mr-2 mt-1" aria-hidden="true"></i>
                            <p class="mb-2">Islas Malvinas 151, Villa General Belgrano, Córdoba</p>
                        </li>
                        <li>
                            <i class="fa fa-phone float-lg-left mb-3 mr-2 mt-1" aria-hidden="true"></i>
                            <a href="tel:+5403546464818">
                              <p class="mb-2">(03546) 464818</p>
                            </a>
                        </li>
                        <!-- <li>
                            <i class="fa fa-whatsapp float-lg-left mb-3 mr-2 mt-1" aria-hidden="true"></i>
                            <a href="https://api.whatsapp.com/send?phone=+5493571667455&amp;text=Buenos%20días,%20quiero%20mas%20info">
                              <p class="mb-2">(0357) 1667455</p>
                            </a>
                        </li> -->
                        <li>
                            <i class="fa fa-envelope float-lg-left mb-3 mr-2 mt-1"></i>
                            <p class="mb-2">info@panaceahotel.com</p>
                        </li>
                       
                      </ul>
                    </div>
                    <div class="social-media m-1">
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
                </div>
              <!-- WIDGET -->
              <div class="col-md-2">
                <div class="footer-widget mb-0">
                  <h3>Enlaces</h3>
                  <div class="inner">
                    <ul class="useful-links">
                      <li>
                        <a href="{{ route('/') }}">Bienvenido</a>
                      </li>
                      <li>
                        <a href="{{ route('hotel') }}">El Hotel</a>
                      </li>
                      <li>
                        <a href="{{ route('hotel') }}#servicios">Servicios</a>
                      </li>
                      <li>
                        <a href="{{ route('habitaciones') }}">Habitaciones</a>
                      </li>
                      <li>
                        <a href="{{ route('hotel') }}#eventos">Eventos</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- WIDGET -->
              <div class="col-md-2">
                <div class="footer-widget">
                    <h3 class="mb-0 mt-lg-4"></h3>
                    <ul class="useful-links">
                        <li>
                          <a href="{{ route('hotel') }}#promocion">Promociones</a>
                        </li>
                        <li>
                          <a href="{{ route('estandar') }}">Suite Estándar</a>
                        </li>
                        <li>
                          <a href="{{ route('superior') }}">Suite Superior</a>
                        </li>
                        <li>
                          <a href="{{Route('hotel')}}#contacto">Reservas</a>
                        </li>
                        <li>
                          <a href="{{ route('hotel') }}#contacto">Contacto</a>
                        </li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </footer>