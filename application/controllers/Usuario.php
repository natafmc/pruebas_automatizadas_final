<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->model('UsuarioBitacora_model','ubm');
    }
    public function pausarAtencion($idUsuario, $idZona)
    {
        $fecha_de_hoy     = date("Y-m-d H:i:s");
        $idUsuarioSession = $this->session->userdata('id_usuario');
        $idEstacion       = $this->session->userdata('estacion');
        $array_bitacora_usuario = array(
            'id_usuario'  => $idUsuarioSession,
            'id_zona'     => $idZona,
            'id_estacion' => $idEstacion,
            'estado'      => EST_OPERARIO_PAUSA_INICIO,
            'fecha_reg'   => $fecha_de_hoy,
            'usuario_reg' => $idUsuarioSession
        );
        $this->ubm->insert($array_bitacora_usuario);
        $array = array('disponibilidad' => EST_OPERARIO_PAUSA_INICIO);
        $respuesta = array('response' => 1, 'mensaje' => "PAUSA DE ATENCIÓN ".$fecha_de_hoy);
        echo json_encode($respuesta);
        $this->session->set_userdata( $array );
    }
    public function continuarAtencion($idUsuario, $idZona)
    {
        $fecha_de_hoy     = date("Y-m-d H:i:s");
        $idUsuarioSession = $this->session->userdata('id_usuario');
        $idEstacion       = $this->session->userdata('estacion');
        $array_bitacora_usuario = array(
            'id_usuario'  => $idUsuarioSession,
            'id_zona'     => $idZona,
            'id_estacion' => $idEstacion,
            'estado'      => EST_OPERARIO_LIBRE,
            'fecha_reg'   => $fecha_de_hoy,
            'usuario_reg' => $idUsuarioSession
        );
        $this->ubm->insert($array_bitacora_usuario);
        $array = array('disponibilidad' => EST_OPERARIO_LIBRE);
        $this->session->set_userdata( $array );

        $respuesta = array('response' => 1, 'mensaje' => "PAUSA DE ATENCIÓN ".$fecha_de_hoy);
        echo json_encode($respuesta);
    }

}