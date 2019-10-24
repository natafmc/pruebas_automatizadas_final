<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ticket_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        $this->db->from('tk_ticket');
        $query = $this->db->get();
        return $query->result();
    }
    public function getById($idTicket)
    {
        $this->db->from('tk_ticket');
        $this->db->where('id_ticket', $idTicket);
        $query = $this->db->get();
        return $query->row();
    }
    public function getTicketsByZona($idZona, $fecha)
    {
        $this->db->from('tk_ticket');
        $this->db->where('id_zona', $idZona);
        $this->db->where('estado', TK_EST_1);
        $this->db->where('fecha_impresion', $fecha);
        $this->db->order_by('prioridad','desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    public function insert($data)
    {
        return $this->db->insert('tk_ticket', $data);
    }
    public function updateEstado($idTicket, $estado)
    {
        $this->db->set('estado', $estado);
        $this->db->where('id_ticket', $idTicket);
        return $this->db->update('tk_ticket');
    }
    public function updateonDisplay($idTicket, $onDisplay)
    {
        $this->db->set('on_display', $onDisplay);
        $this->db->where('id_ticket', $idTicket);
        return $this->db->update('tk_ticket');
    }
    public function listarOnDisplay()
    {
        $this->db->from('tk_ticket');
        $this->db->where('on_display', ON_DISPLAY_TRUE);
        $this->db->or_where('on_display', ON_DISPLAY_BLINK);
        $this->db->group_start();
        $this->db->where('estado', TK_EST_2);
        $this->db->or_where('estado', TK_EST_3);
        $this->db->group_end();
        $this->db->order_by('on_display', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}
