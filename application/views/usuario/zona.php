<?php $this->load->view('commons/header');	?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4">DISPENSADOR</h1>
  	<p class="lead">
  		ZONA DE ATENCION	
	</p>
</div>
<div class="container">
      <div class="card-deck mb-12 text-center">
      	
        <div class="card mb-2 box-shadow">
			<div class="card-body">
				<p>
				</p>
				<?php foreach ($zonas as $zona):?>
					<a href="<?php echo base_url(); ?>Ticketero/categoriasZona/<?php echo $zona->ID_ZONA ?>" type="button" class="btn btn-lg btn-block btn-outline-primary imprimir" data-id="<?php echo $zona->ID_ZONA ?>"><?php echo $zona->NOMBRE; ?></a>
				<?php endforeach; ?>
				
			</div>
        </div>
		
      </div>

<?php $this->load->view('commons/footer'); ?>
<?php $this->load->view('commons/modal_ticket'); ?>

</div>
