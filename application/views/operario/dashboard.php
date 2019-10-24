<?php $this->load->view('commons/header');	?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4">ATENCI&Oacute;N</h1>
  <h3><?php echo $this->session->userdata('username'); ?></h3>
</div>
<div class="container">

<div class="row">
  <div class="col-md-12">

    <span style="display:none" data-id-zona="<?php echo $zona; ?>" class="llamar">Llamar</span>

  	<a href="#" class="btn btn-dark btn-lg btn-block btn-huge pausarAtencion" data-id="<?php echo $this->session->userdata('id_usuario'); ?>" data-id-zona="<?php echo $zona; ?>">
  		<span class="oi oi-icon-bell" title="icon bell" aria-hidden="true"></span> pausar
  	</a>

    <a href="#" class="btn btn-dark btn-lg btn-block btn-huge continuarAtencion" data-id="<?php echo $this->session->userdata('id_usuario'); ?>" data-id-zona="<?php echo $zona; ?>">
      <span class="oi oi-icon-bell" title="icon bell" aria-hidden="true"></span> iniciar/continuar
    </a>

  </div>
</div>
<br>
<br>
<br>
<a href="<?php echo base_url();?>Login/logout" class="btn btn-dark btn-sm btn-huge">
  <span class="oi oi-icon-bell" title="icon bell" aria-hidden="true"></span> LogOut
</a>
<br>
<br><br>
<?php $this->load->view('commons/modal_llamar'); ?>
<?php $this->load->view('commons/footer'); ?>
<script>
  var operarioDisponibilidad = <?php echo $this->session->userdata('disponibilidad');?>;
  var tiempoEntreLlamada = <?php echo TIEMPO_ENTRE_LLAMADA; ?>;
  if(operarioDisponibilidad == 1)
  {
    console.log("LLAMAR!!! "+operarioDisponibilidad);
    setTimeout(function(){
                  $('.llamar').click();
              }, tiempoEntreLlamada);
  }
  else
  {
      console.log("Esperar a que este libre "+operarioDisponibilidad);
  }

  $('.llamar').click(function(){
      var _self = $(this);
      var id_zona = _self.attr("data-id-zona");
      console.log("llamar zona ", id_zona);
      $('.finalizarModal').prop('disabled', true);
      $.ajax({
          url: '<?php echo base_url(); ?>Turno/pedirTicket/'+id_zona,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              llenarModalLlamar(respuesta.ticket, respuesta.llamada);
              $('#llamarTicket').modal('show');
            }else{
              // llenarMensaje(respuesta.mensaje);
              // $('#mensajeModal').modal('show');
              location.reload();
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
    });
  $('.llamarModal').click(function(){

  });
  function llenarMensaje(mensaje){
    $('#mensaje').html();
    $('#mensaje').html(mensaje);
  }
  function llenarModalLlamar(ticket, llamada) {
    $('#ticketNro').html(ticket.CODIGO);
    $('#nroLlamada').html('LLAMADA # '+llamada);
    $('#llamarTicket').find('#llamadaMensaje').html("");
    $('.llamarModal').attr({
      'data-id': ticket.ID_TICKET
    });
    $('.llamarModal').attr({
      'data-id': ticket.ID_TICKET
    });
    $('.atenderModal').attr({
      'data-id': ticket.ID_TICKET
    });
    $('.finalizarModal').attr({
      'data-id': ticket.ID_TICKET
    });
    $('.derivarModal').attr({
      'data-id': ticket.ID_TICKET
    });

  }
  // LLAMAR
  $('.llamarModal').click(function(){
    var _self = $(this);
    var idTicket = _self.attr("data-id");
    $('.finalizarModal').prop('disabled', true);
      $.ajax({
          url: '<?php echo base_url(); ?>Turno/llamarTicker/'+idTicket,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              actualizarLlamar(respuesta.llamada);
            }else{
              actualizarLlamar(respuesta.llamada);
              actualizarMensajeLlamada(respuesta.mensaje);
              $('#llamarTicket').modal('hide');
              location.reload();
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
  });
  function actualizarLlamar(llamada) {
      $('#llamarTicket').find('#nroLlamada').html("");
      $('#llamarTicket').find('#nroLlamada').html('LLAMADA # '+llamada);
  }
  function actualizarMensajeLlamada(mensaje){
      $('#llamarTicket').find('#llamadaMensaje').html("");
      $('#llamarTicket').find('#llamadaMensaje').html(mensaje);
  }
  // ATENDER
  $('.atenderModal').click(function(){
    var _self = $(this);
    var idTicket = _self.attr("data-id");
    $('.finalizarModal').prop('disabled', false);
      $.ajax({
          url: '<?php echo base_url(); ?>Turno/iniciarAtencionTicket/'+idTicket,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              actualizarLlamar(respuesta.mensaje);
              actualizarMensajeLlamada("");
            }else{
              actualizarLlamar(respuesta.llamada);
              actualizarMensajeLlamada(respuesta.mensaje);
              $('#llamarTicket').modal('hide');
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
  });
  //FINALIZAR
  $('.finalizarModal').click(function(){
    var _self = $(this);
    var idTicket = _self.attr("data-id");
      $.ajax({
          url: '<?php echo base_url(); ?>Turno/finalizarAtencionTicket/'+idTicket,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              actualizarLlamar(respuesta.mensaje);
              setTimeout($('#llamarTicket').modal('hide'), 3000);
              location.reload();
            }else if(respuesta.response == 2){
              actualizarMensajeLlamada(respuesta.mensaje);
            }else{
              actualizarLlamar(respuesta.mensaje);
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
  });
  $(".continuarAtencion").click(function(){
    var _self = $(this);
    var idUsuario = _self.attr("data-id");
    var idZona = _self.attr("data-id-zona");
    console.log("CONTINUA DE ATENCION ", idUsuario);
    $.ajax({
          url: '<?php echo base_url(); ?>Usuario/continuarAtencion/'+idUsuario+"/"+idZona,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              console.log("cambiar estado");
              location.reload();
            }else{
              console.log("nada");
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
  });
  $(".pausarAtencion").click(function(){
    var _self = $(this);
    var idUsuario = _self.attr("data-id");
    var idZona = _self.attr("data-id-zona");
    $.ajax({
          url: '<?php echo base_url(); ?>Usuario/pausarAtencion/'+idUsuario+"/"+idZona,
          type:'POST',
          dataType:'json',
          success: function(respuesta) {
            if(respuesta.response === 1){
              location.reload();
            }else{
              console.log("Sigue en pausa");
            }
          },
          error: function(xhr, status) {
                console.log("No se ha podido obtener la información");
            }
        });
  });
</script>
</div>