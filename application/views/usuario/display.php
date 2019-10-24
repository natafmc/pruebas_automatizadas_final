<?php $this->load->view('commons/header');	?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4"><?php echo BIENVENIDO_DISPLAY; ?></h1>
  	<h3 class="display-6">
  		ZONA DE ESPERA
	</h3>
</div>

<!-- <video autoplay muted id="myVideo">
  <source src="<?php echo base_url().PATH_MULTIMEDIA_DISPLAY.$multimedia->PATH;?>">
</video> -->

<!-- Optional: some overlay text to describe the video -->
<div class="content" id="llamadas">

		<div class="card-deck mb-3 text-center">
      	<?php foreach ($tickets as $tk):?>
        <div class="card mb-2 box-shadow alert
        	<?php if($tk->blink == ON_DISPLAY_BLINK): ?>
        		alert-danger blink_me
			<?php elseif($tk->blink == ON_DISPLAY_TRUE): ?>
				alert-success
			<?php endif; ?>
				">
			<div class="card-body">
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Ticket <span id="siguiente"><?php echo $tk->ticket_codigo ?></span></li>
		              <li>Pase a <span id="estacionAtencion"><?php echo $tk->estacion ?></span></li>
		            </ul>
			</div>
        </div>
		<?php endforeach; ?>
      </div>
</div>
<?php $this->load->view('commons/footer'); ?>
<?php $this->load->view('commons/modal_ticket'); ?>
<script>
	setInterval(function() {
		$("#myVideo").load(" #myVideo > *","");
	}, <?php echo $multimedia->DURACION*1000; ?>);
	setInterval(function() {
		$("#llamadas").load(" #llamadas > *","");
	}, 3000);
	function blinker() {
	    $('.blink_me').fadeOut(400);
	    $('.blink_me').fadeIn(400);
	}

	setInterval(blinker, 1000);
</script>

<style>
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 1);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>
