<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Articulo_model extends CI_Model
{
    function get_last_articles($var)
    {   
        $query = $this->db->get('articulo');
        $data_array = $query->result_array();
        return $data_array;
    }
    
    function delete_id($var)
    {
        $del = "DELETE FROM 'articulo' WHERE id =".$var.";";
        $query = $this->db->query($del);
        $delete = $query->result_array();
    }

    function getValues()
    {
    $query = $this->db->get_where('articulo',array('id'=>5));
    $query = $this->db->where('titulo!=',$titulo);
    }

    function setValues($titulo,$id)
    {
        $data = array('titulo'=>$titulo,'id'=>$id);
        $this->db->where('id',$id);
        $this->db->update('articulo',$data);
    }
    
    function insertValues($titulo,$id)
    {   
        $data = array('titulo'=>$titulo,'id'=>$id);
        $this->db->insert('articulo',$data);
    }

    function deleteValues($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('articulo');

    }
}
?>