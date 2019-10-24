<!-- Modal -->
<div class="modal fade" id="llamarTicket" tabindex="-1" role="dialog" aria-hidden="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriaName">TICKET</h5>
      </div>
      <div class="modal-body" id="detalleTicket">
      		<h1 id="ticketNro"></h1>
          <h4 id="nroLlamada"></h4>          
          <div id="llamadaMensaje" class="alert alert-danger" role="alert"></div>
      </div>
      <div class="modal-footer">
          <div class="col-md-3">
            <a href="#" class="btn btn-danger btn-md btn-block btn-huge llamarModal" data-id="">
              LLAMAR
            </a>
          </div>
        <div class="col-md-3">
            <a href="#" class="btn btn-info btn-md btn-block btn-huge atenderModal" data-id="">
              ATENDER
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="btn btn-success btn-md btn-block btn-huge finalizarModal" data-id="">
              FINALIZAR
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="btn btn-warning btn-md btn-block btn-huge derivarModal" data-id="">
              DERIVAR
            </a>
        </div>
      </div>      
    </div>
  </div>
</div>
