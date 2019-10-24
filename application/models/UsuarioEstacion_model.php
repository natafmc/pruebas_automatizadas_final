<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UsuarioEstacion_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getEstacionByUsuarioZona($idUsuario,$idZona)
    {
    	$this->db->select('tk_estacion.*');
    	$this->db->from('tk_usuario_estacion');
    	$this->db->join('tk_estacion', 'tk_estacion.id_estacion = tk_usuario_estacion.id_estacion');
    	$this->db->where('tk_usuario_estacion.id_zona', $idZona);
    	$this->db->where('id_usuario', $idUsuario);
    	$this->db->where('tk_usuario_estacion.estado', EST_ACTIVO);
		$query = $this->db->get();
        return $query->row();
    }
}