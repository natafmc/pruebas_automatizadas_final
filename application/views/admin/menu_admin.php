<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="<?php echo base_url();?>">tickET</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarPersona">Persona</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarUsuario">Usuario</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarEstacion">Estación</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarZonaAtencion">Zona Atención</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarCategoria">Categoría</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>administrar/administrarMultimedia">Multimedia <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asignaciones</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo base_url();?>administrar/administrarUsuarioEstacion">Usuario-Estacion</a>
              <a class="dropdown-item" href="<?php echo base_url();?>administrar/administrarUsuarioZona">Usuario-Zona</a>
              <a class="dropdown-item" href="<?php echo base_url();?>administrar/administrarCategoriaZona">Categoría-Zona</a>
            </div>
          </li>
        </ul>

          <img class="mb-2" src="<?php echo base_url(); ?>public/image/LOGO_ENDE_TECNOLOGIAS_FO.png" alt="" width="180" height="72">

      </div>
    </nav>

