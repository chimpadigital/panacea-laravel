@extends('layouts.site')

@section('content')
    <!-- ========== REVOLUTION SLIDER ========== -->
      <section class="rooms rooms-over-slider bg-image mt-0">
          <div class="container">
            
            <div class="row center">
              <!-- ITEM -->
              <div class="col-md-6">
                <div class="room-grid-item" data-wow-offset="30" data-wow-delay=".6s">
                  <figure class="gradient-overlay-hover link-icon">
                    <a href="{{ route('superior') }}">
                      <img src="{{ asset('frontend/images/rooms/superior.jpg') }}" class="img-fluid" alt="Image">
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
                  <a href="{{ route('hotel') }}#contacto" target="_blank" class="btn view-all">
                    <i class="fa fa-bed"></i>RESERVAR
                  </a>
                  <a href="{{ route('superior') }}" class="btn btn-outline view-all">
                    Más Info
                  </a>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-6">
            <div class="room-grid-item" data-wow-offset="30" data-wow-delay=".4s">
              <figure class="gradient-overlay-hover link-icon">
                <a href="{{ route('estandar') }}">
                  <img src="{{ asset('frontend/images/rooms/estandar.jpg') }}" class="img-fluid" alt="Image">
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
                <a href="{{ route('hotel') }}#contacto" target="_blank" class="btn view-all">
                    <i class="fa fa-bed"></i>RESERVAR
                </a>
                <a href="{{ route('estandar') }}" class="btn btn-outline view-all">
                    Más Info
                </a>
                <!-- <p>Enjoy our single room</p> -->
              </div>
            </div>
          </div>
              
            </div>
          </div>
@endsection