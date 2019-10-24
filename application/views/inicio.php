<?php $this->load->view('commons/header');	?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h3 class="display-4"><?php echo NOMBRE_SIS; ?></h3>

</div>
<div class="container">


<div class="row">
	<div class="col-md-6 box-shadow">
		<div class="card">
			<div class="card-header">
				<h3 class="my-0 font-weight-normal">ADMINISTRADOR</h3>
			</div>
			<div class="card-body">
				<h3 class="card-title pricing-card-title">ADMINISTRADOR DE SISTEMA</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta labore, perspiciatis culpa. Nostrum unde sit tempora! Praesentium autem porro incidunt minima libero tempore consequuntur, excepturi quia facilis eius, ut! Libero!
				</p>
				<a href="<?php echo base_url(); ?>Login/loginAdmin" type="button" class="btn btn-lg btn-block btn-outline-primary">
				ACCEDER</a>
			</div>
			</div>
        </div>
        

        <div class="col-md-6 box-shadow">
        	<div class="card">
			<div class="card-header">
				<h3 class="my-0 font-weight-normal">OPERARIO</h3>
			</div>
			<div class="card-body">
				<h3 class="card-title pricing-card-title">Operario de estacion </h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate magnam dolorum quis suscipit explicabo deserunt consectetur esse vel voluptates ratione cumque ipsum, odio nihil placeat, ipsam iste, aperiam ducimus eaque!
				</p>
				<a href="<?php echo base_url(); ?>Login/loginOperario" type="button" class="btn btn-lg btn-block btn-outline-primary">
				ACCEDER</a>
			</div>
			</div>
        </div>

        <div class="col-md-6 box-shadow">
        	<div class="card">
			<div class="card-header">
				<h3 class="my-0 font-weight-normal">TICKETERO</h3>
			</div>
			<div class="card-body">
				<h3 class="card-title pricing-card-title">Dispensador de tickets</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure consequuntur, iste libero ducimus quaerat natus, ratione voluptatum harum, numquam eius vel itaque perferendis soluta dolorem, quis minima sed unde praesentium!
				</p>
				<a href="<?php echo base_url(); ?>Ticketero" type="button" class="btn btn-lg btn-block btn-outline-primary">
				ACCEDER</a>
			</div>
			</div>
        </div>

      	<div class="col-md-6 box-shadow">
      		<div class="card">
			<div class="card-header">
				<h3 class="my-0 font-weight-normal">DISPLAY</h3>
			</div>
			<div class="card-body">
				<h3 class="card-title pricing-card-title">Pantalla de llamadas</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure consequuntur, iste libero ducimus quaerat natus, ratione voluptatum harum, numquam eius vel itaque perferendis soluta dolorem, quis minima sed unde praesentium!
				</p>
				
				<a href="<?php echo base_url(); ?>Turno/display" type="button" class="btn btn-lg btn-block btn-outline-primary">
				ACCEDER</a>
			</div>
			</div>
        </div>


</div>      	 
     

<?php $this->load->view('commons/footer'); ?>

</div>
