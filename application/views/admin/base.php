<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tick[ET]</title>
<?php $this->load->view('commons/header'); ?>
<?php if(isset($output)): ?>
<?php foreach($css_files as $file): ?>
	   <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php endif; ?>
</head>
<body>
	<?php $this->load->view('admin/menu_admin') ?>
    <div class="container">
        <?php if(isset($output)): ?>
        	<div style='height:20px;'></div>  
            <div style="padding: 10px">
        		<?php echo $output; ?>
            </div>
        <?php else: ?>
            <h1 id="welcome">Bienvenido: <?php echo $this->session->userdata('username'); ?></h1>
        <?php endif; ?>

        <?php $this->load->view('commons/footer') ?>
        <?php if(isset($output)): ?>
        <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>  
</body>
</html>
