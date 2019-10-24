<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Zona_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getActivas()
    {
        $this->db->from('tk_zona_atencion');
        $this->db->where('estado', EST_ACTIVO);
        $this->db->where('estado_reg', EST_ACTIVO);
        $query = $this->db->get();
        return $query->result();
    }
    public function getZonasByUsuario($id)
    {
        $this->db->select('tk_zona_atencion.*');
        $this->db->from('tk_zona_atencion');
        $this->db->join('tk_usuario_zona', 'tk_usuario_zona.id_zona = tk_zona_atencion.id_zona');        
        $this->db->where('tk_zona_atencion.estado', EST_ACTIVO);
        $this->db->where('tk_usuario_zona.id_usuario', $id);
        $query = $this->db->get();
        return $query->result();
       
    }
    public function insert($data)
    {
        return $this->db->insert('tk_ticket', $data);
    }
}