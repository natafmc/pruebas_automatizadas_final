
<?php $this->load->view('commons/header'); ?>
<style type="text/css">
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<body class="text-center">
    <form class="form-signin" action="<?php echo base_url()?>Login/checkAdmLogin" method="POST">
      
      <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
      
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="text" name="username" class="form-control" placeholder="Usuario" required="" autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      
      <p class="mt-5 mb-3 text-muted"><?php echo COPYRIGHT; ?></p>
    </form>
  

</body>
</html>