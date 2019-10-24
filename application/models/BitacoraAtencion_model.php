<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BitacoraAtencion_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  	public function insert($data)
    {
        return $this->db->insert('tk_bitacora_atencion', $data);
    }
}