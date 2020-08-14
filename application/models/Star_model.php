<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Star_model extends CI_Model
{
    public function displayElements()
    {
        $this->db->select('p.id, p.total, c.Nombre');
        $this->db->from('pedidos as p, users as c');
        $this->db->where('p.id_cliente = c.Id_User');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function displayPedidosProductos($id)
    {
        $this->db->select('pro.nombre, pro.id, c.Id_User');
        $this->db->from('productos as pro, users as c, pedidos as p, pedidos_productos as pp');
        $this->db->where('p.id',$id);
        $this->db->where('p.id_cliente = c.Id_User');
        $this->db->where('p.id = pp.id_pedido');
        $this->db->where('pro.id = pp.id_producto');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function insert_values($data)
    {
        $this->db->insert('star_rating',$data);
    }

    public function check($id_pedido)
    {
        $this->db->select('sr.id_rating');
        $this->db->from('star_rating as sr, pedidos as p');
        $this->db->where('sr.id_pedido',$id_pedido);
        $this->db->where('p.id = sr.id_pedido');
        $query = $this->db->get();

        if( count($query->result_array()) > 0) return true;
        else return false;
        
    }

    public function displayGrades($id)
    {
        $this->db->select('pro.nombre, str.calificacion_1, str.calificacion_2, str.calificacion_3, str.comentarios');
        $this->db->from('pedidos as p, productos as pro, star_rating as str');
        $this->db->where('p.id',$id);
        $this->db->where('p.id = str.id_pedido');
        $this->db->where('pro.id = str.id_producto');
        $query = $this->db->get();
        return $query->result_array();
    }

}
?>