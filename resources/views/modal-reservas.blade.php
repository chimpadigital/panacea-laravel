 <!-- ========== POPUP BOOKING FORM ========== -->

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h3>Eventos y reuniones</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <div id="booking-notification" class="notification"></div>
                <div class="popup-booking-form-inner">
                  <form class="booking-form-advanced" id="booking-form" method="POST" action="{{ route('reserva') }}">

                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nombre</label>
                          <input name="booking-name" type="text" class="form-control" placeholder="Nombre y Apellido">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" name="booking-email" type="email" placeholder="ejemplo@gmail.com">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Teléfono</label>
                          <input name="booking-phone" type="text" class="form-control" placeholder="(Cod. Área) + Teléfono">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tipo de evento</label>
                          <select name="booking-country" class="form-control" title="Elegir" data-live-search="false" data-size="5">
                            <option value="Empresarial">Empresarial</option>
                            <option value="Social">Social</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Fecha</label>
                          <input type="date" class="form-control " name="booking-date">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Número de asistentes</label>
                          <div class="panel-dropdown">
                            <div class="form-control guestspicker">Asistentes
                              <span class="gueststotal"></span></div>
                            <div class="panel-dropdown-content">
                              <div class="guests-buttons">
                                <label>Cantidad</label>
                                <div class="guests-button">
                                  <div class="minus"></div>
                                  <input type="text" name="booking-adults" class="booking-guests" value="0">
                                  <div class="plus"></div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>características del evento</label>
                          <textarea class="form-control" name="booking-comments" placeholder="Escriba aquí..."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn float-right mb-3 mt-2">
                          <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                          Consultar
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
      
            <!-- Modal footer -->
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-outline btn-sm" data-dismiss="modal">Close</button>
            </div> -->
      
          </div>
        </div>
      </div>