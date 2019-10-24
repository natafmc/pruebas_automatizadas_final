<!-- Modal -->
<div class="modal fade" id="ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriaName"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detalleTicket">
          <h5><?php echo ENCABEZADO_TK." ".NOMBRE_EMP ?>
            <br>
            <?php echo WEB_EMPRESA; ?>
          </h5>
      		<h1 id="ticketNro"></h1> 
          <ul>
            <li>
              <?php echo SUCURSAL_TK; ?>
            </li>
            <li id="fechaTK"></li>
            <li id="horaTK"></li>
            
          </ul>     	
      </div>
      <div class="modal-footer">
        <p><?php echo LEYENDA_TK; ?></p>
      </div>
    </div>
  </div>
</div>