<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrar extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Administrar_model', 'adm');
    }
    public function _visualizar_admin($output = null)
	{
		$this->load->view('admin/base',(array)$output);
	}
    public function administrarCategoria()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_categoria');
			$crud->set_subject('Categoria(s)');

			$crud->columns(
				'NOMBRE',
				'DESCRIPCION',
				'ESTADO',
				'HORA_INICIO_ATENCION',
				'HORA_CIERRE','CODIGO',
				'SECUENCIAL','PRIORIDAD',
				'USUARIO_REG','FECHA_REG',
				'USUARIO_MOD','FECHA_MOD',
				'ESTADO_REG')
				->display_as('NOMBRE', 'Categoría')
				->display_as('DESCRIPCION', 'Descripción')
				->display_as('ESTADO', 'Estado')
				->display_as('HORA_INICIO_ATENCION', 'Hora Inicio Atención')
				->display_as('HORA_CIERRE', 'Hora Cierre')
				->display_as('CODIGO', 'Código')
				->display_as('SECUENCIAL', 'Secuencial')
				->display_as('PRIORIDAD', 'Prioridad')
				->display_as('USUARIO_REG', 'Usuario Registro')
				->display_as('FECHA_REG', 'Fecha Registro')
				->display_as('USUARIO_MOD', 'Usuario Modificación')
				->display_as('FECHA_MOD', 'Fecha Modificación')
				->display_as('ESTADO_REG', 'Estado Registro');
			$crud->fields(
				'NOMBRE',
				'DESCRIPCION',
				'ESTADO',
				'HORA_INICIO_ATENCION',
				'HORA_CIERRE','CODIGO',
				'SECUENCIAL','PRIORIDAD');

			$crud->required_fields(
				'NOMBRE',
				'DESCRIPCION',
				'ESTADO',
				'HORA_INICIO_ATENCION',
				'HORA_CIERRE','CODIGO',
				'SECUENCIAL','PRIORIDAD'
			);
			$crud->callback_after_update(array($this, 'log_categoria_after_update'));

			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function log_categoria_after_update($post_array,$primary_key)
	{
		$data_array = array(
			"USUARIO_MOD" => $this->session->userdata('id_usuario'),
			"FECHA_MOD" => date('Y-m-d H:i:s')
		);
		$this->adm->updateADM($data_array,'tk_categoria',$primary_key,'ID_CATEGORIA');
		return true;
	}
    public function administrarPersona()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_persona');
			$crud->set_subject('Persona');

			$crud->columns('NOMBRE','APELLIDOS','FECHA_NAC', 'ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD','ESTADO_REG')
				->display_as('NOMBRE', 'Nombre')
				->display_as('APELLIDOS', 'Apellidos')
				->display_as('FECHA_NAC', 'Fecha de Nacimiento')
				->display_as('ESTADO', 'Estado')
				->display_as('USUARIO_REG','Usuario Registro')
				->display_as('FECHA_REG','Fecha Registro')
				->display_as('USUARIO_MOD','Usuario Modificación')
				->display_as('FECHA_MOD','Fecha Modificación')
				->display_as('ESTADO_REG','Estado Registro');
			$crud->fields('NOMBRE','APELLIDOS','FECHA_NAC', 'ESTADO');
			$crud->required_fields('NOMBRE','APELLIDOS','FECHA_NAC', 'ESTADO');
			$crud->callback_after_update(array($this, 'log_persona_after_update'));
			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
 	public function log_persona_after_update($post_array,$primary_key)
	{
		$data_array = array(
			"USUARIO_MOD" => $this->session->userdata('id_usuario'),
			"FECHA_MOD" => date('Y-m-d H:i:s')
		);
		$this->adm->updateADM($data_array,'tk_persona',$primary_key,'ID_PERSONA');
		return true;
	}
    public function administrarUsuario()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_usuario');
			$crud->set_subject('Usuario');

			$crud->columns('NOMBRE_USUARIO','PASSWORD','ESTADO', 'FECHA_EXPIRACION','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD','ESTADO_REG');
			$crud->fields('ID_PERSONA','NOMBRE_USUARIO','PASSWORD','FECHA_EXPIRACION','ESTADO');
			$crud->display_as('NOMBRE_USUARIO', 'Nombre Usuario')
				 ->display_as('PASSWORD','Contraseña')
				 ->display_as('ESTADO','Estado')
				 ->display_as('FECHA_EXPIRACION','Fecha Expiración')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación')
				 ->display_as('ESTADO_REG','Estado Registro')
				 ->display_as('ID_PERSONA','Persona');

			$crud->set_relation('ID_PERSONA','tk_persona','{NOMBRE} {APELLIDOS}');

			$crud->required_fields('ID_PERSONA','NOMBRE_USUARIO','PASSWORD','FECHA_EXPIRACION','ESTADO');
			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function administrarZonaAtencion()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_zona_atencion');
			$crud->set_subject('Zona Atencion');
			//aca defines q columnas mostraras en el grid, ambas son independientes
			$crud->columns('NOMBRE','DESCRIPCION','CODIGO','ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD','ESTADO_REG');
			// aca defines q campos saldran en el formulario
			$crud->fields('NOMBRE','DESCRIPCION','CODIGO','ESTADO');
			$crud->display_as('NOMBRE', 'Nombre Zona de Atención')
				 ->display_as('DESCRIPCION','Descripción')
				 ->display_as('CODIGO','Código')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación')
				 ->display_as('ESTADO_REG','Estado Registro');
			$crud->required_fields('NOMBRE','DESCRIPCION','CODIGO','ESTADO');
			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
	public function administrarUsuarioZona()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_usuario_zona');
			$crud->set_subject('Usuario - Zona');

			$crud->columns('ID_USUARIO','ID_ZONA','ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD','ESTADO_REG');
			$crud->fields('ID_USUARIO','ID_ZONA','ESTADO');
			$crud->display_as('ID_USUARIO', 'Usuario')
				 ->display_as('ID_ZONA','Zona')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación')
				 ->display_as('ESTADO_REG','Estado Registro');

			$crud->set_relation('ID_USUARIO','tk_usuario','{NOMBRE_USUARIO}');
			$crud->set_relation('ID_ZONA','tk_zona_atencion','{NOMBRE}');
			$crud->required_fields('ID_USUARIO','ID_ZONA','ESTADO');

			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function administrarCategoriaZona()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_categoria_zona');
			$crud->set_subject('Categoria - Zona');

			$crud->columns('ID_CATEGORIA','ID_ZONA','ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD','ESTADO_REG');
			$crud->fields('ID_CATEGORIA','ID_ZONA','ESTADO');
			$crud->display_as('ID_CATEGORIA', 'Categoria')
				 ->display_as('ID_ZONA','Zona')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación')
				 ->display_as('ESTADO_REG','Estado Registro');

			$crud->set_relation('ID_CATEGORIA','tk_categoria','{CODIGO} - {NOMBRE}');
			$crud->set_relation('ID_ZONA','tk_zona_atencion','{NOMBRE}');
			$crud->required_fields('ID_CATEGORIA','ID_ZONA','ESTADO');
			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function administrarEstacion()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_estacion');
			$crud->set_subject('Estación');
			$crud->columns('ID_ZONA','CODIGO','DESCRIPCION','NOMBRE_DISPLAY','ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD');
			$crud->fields('ID_ZONA','CODIGO','DESCRIPCION','NOMBRE_DISPLAY','ESTADO');
			$crud->display_as('ID_ZONA', 'Zona')
				 ->display_as('CODIGO','Código')
				 ->display_as('DESCRIPCION','Descripción')
				 ->display_as('NOMBRE_DISPLAY','Nombre Display')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación');

			$crud->set_relation('ID_ZONA','tk_zona_atencion','{NOMBRE}');

			$crud->required_fields('ID_ZONA','CODIGO','DESCRIPCION','NOMBRE_DISPLAY','ESTADO');

			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function administrarUsuarioEstacion()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_usuario_estacion');
			$crud->set_subject('Usuario - Estación');
			$crud->columns('ID_USUARIO','ID_ZONA','ID_ESTACION','ESTADO','USUARIO_REG','FECHA_REG','USUARIO_MOD','FECHA_MOD');
			$crud->fields('ID_USUARIO','ID_ZONA','ID_ESTACION','ESTADO');
			$crud->display_as('ID_USUARIO', 'Usuario')
				 ->display_as('ID_ZONA','Zona')
				 ->display_as('ID_ESTACION','Estación')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación');

			$crud->set_relation('ID_USUARIO','tk_usuario','{NOMBRE_USUARIO}');
			$crud->set_relation('ID_ZONA','tk_zona_atencion','{NOMBRE}');
			$crud->set_relation('ID_ESTACION','tk_estacion','{CODIGO}');

			$crud->required_fields('ID_USUARIO','ID_ZONA','ID_ESTACION','ESTADO');

			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function administrarMultimedia()
    {
    	try{
			$crud = new grocery_CRUD();
			$crud->set_table('tk_multimedia');
			$crud->set_subject('Multimedia Display');
			$crud->columns(
					'PATH',
					'DESCRIPCION',
					'DURACION',
					'ORDEN',
					'ESTADO',
					'USUARIO_REG',
					'FECHA_REG',
					'USUARIO_MOD',
					'FECHA_MOD');
			$crud->fields(
					'PATH',
					'DESCRIPCION',
					'DURACION',
					'ORDEN',
					'ESTADO');
			$crud->display_as('DESCRIPCION', 'Descripción')
				 ->display_as('PATH','Multimedia')
				 ->display_as('DURACION','Duración')
				 ->display_as('ORDEN','Orden')
				 ->display_as('ESTADO','Estado')
				 ->display_as('USUARIO_REG','Usuario Registro')
				 ->display_as('FECHA_REG','Fecha Registro')
				 ->display_as('USUARIO_MOD','Usuario Modificación')
				 ->display_as('FECHA_MOD','Fecha Modificación');

			$crud->set_field_upload('PATH',PATH_MULTIMEDIA_DISPLAY);

			$output = $crud->render();

			$this->_visualizar_admin($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
}