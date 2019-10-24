<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Categoria_model','categoria');
		$this->load->model('CategoriaZona_model','cz');
		$this->load->model('CategoriaZonaBitacora_model','czb');
		$this->load->model('Ticket_model','tk');
    }
	public function create($id_categoria_zona)
	{
		$hoy = date("Y-m-d");
		$hora = date("H:i:s");
		$categoria_zona_bitacora_data = $this->czb->getByCategoriaZonaToday($id_categoria_zona, $hoy);
		$categoria_zona_data = $this->cz->getById($id_categoria_zona);
		/* DATOS PARA TICKET */
		$id_zona = $categoria_zona_data->id_zona;
		$codigo_zona = $categoria_zona_data->codigo_zona;
		$nombre_zona = $categoria_zona_data->nombre_zona;
		$codigo_categoria = $categoria_zona_data->codigo_cat;
		$nombre_categoria = $categoria_zona_data->nombre_cat;
		$id_categoria = $categoria_zona_data->id_categoria;
		$prioridad_cat = $categoria_zona_data->prioridad;
		/* END DATOS PARA TICKET*/
		if($categoria_zona_bitacora_data == '0'){
			$data = array(
				'ID_CATEGORIA_ZONA' => $id_categoria_zona,
				'FECHA_REG'=> $hoy,
				'HORA_INICIO_ATENCION'=> $hora,
				'SECUENCIAL_ZONA_CAT'=> 0,
				'CODIGO'=> $codigo_zona.SIST_SEP.$codigo_categoria
			);
			$id = $this->czb->createAutomatic($data);
			$categoria_zona_bitacora_data = $this->czb->getById($id);
		}
		$id_cat_zona_bitacora = $categoria_zona_bitacora_data->ID_CAT_ZONA_BITACORA;
		$numero_ticket = $categoria_zona_bitacora_data->SECUENCIAL_ZONA_CAT + SIST_INC;
		$codigo_ticket = $categoria_zona_bitacora_data->CODIGO.SIST_SEP.($numero_ticket);
	
		$ticket_data = array(
			'id_categoria'=> $id_categoria,
			'id_zona' => $id_zona,
			'numero' => $numero_ticket,
			'codigo'=> $codigo_ticket,
			'prioridad' => $prioridad_cat,
			'qr' => '...',
			'usuario_reg' => 'localhost',
			'fecha_reg'=> $hoy,
			'estado' => TK_EST_1,
			'fecha_impresion' => $hoy,
			'hora_impresion' => $hora
		);
		$insert_ticket = $this->tk->insert($ticket_data);
		if($insert_ticket)
		{
			$this->czb->updateSecuencial($id_cat_zona_bitacora, $numero_ticket);
			$respuesta = array('response' => 1, 'ticket'=>$ticket_data, 'categoria'=>$nombre_categoria, 'zona' => $nombre_zona);
			echo json_encode($respuesta);
		}
		else
		{
			$respuesta = array('response' => 0, 'ticket'=>$ticket_data);
			echo json_encode($respuesta);
		}
	}
}
