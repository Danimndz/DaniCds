<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class P2_model extends CI_Model
{
    public function insert_d($data_)
    {
        $this->db->insert('discos', $data_);
    }

    public function display_data()
    {
        $sql = 'SELECT * FROM discos';
        $query = $this->db->query($sql);
        $data_array = $query->result_array();
        return $data_array;
    }

    public function delete_d($id)
    {
        $sql = 'DELETE FROM discos WHERE id_discos='.$id;
        $query = $this->db->query($sql);
    }

    public function select_album($id)
    {
        $sql = 'SELECT * FROM discos WHERE id_discos='.$id;
        $query = $this->db->query($sql);
        return $query->result_array()[0];
    }
    
    public function edit_album($id, $artista, $album, $cantidad, $precio,$portada)
    {
        $sql ='UPDATE discos SET Artista ="'.$artista.'", Album ="'.$album.'",Cantidad ="'.$cantidad.'",Precio="'.$precio.'",Portada="'.$portada.'"WHERE id_discos='.$id;
        $query = $this->db->query($sql);
    }

    public function edit_albumSinPortada($id, $artista, $album, $cantidad, $precio)
    {
        $sql ='UPDATE discos SET Artista ="'.$artista.'", Album ="'.$album.'",Cantidad ="'.$cantidad.'",Precio="'.$precio.'"WHERE id_discos='.$id;
        $query = $this->db->query($sql);
    }

    public function update_quantity($id,$cantidad){
        $sql = 'UPDATE discos SET Cantidad = Cantidad - '.$cantidad . ' WHERE id_discos='.$id;
        $query = $this->db->query($sql);
    }



///////////////////////////////ADMINMODEL//////////////////////////////////////
    function insertUser_data($data)
    {
        $this->db->insert('p2_users',$data);
    }

    function display_Userdata()
    {
        $sql = 'SELECT * FROM p2_users';
        $query = $this->db->query($sql);
        $data_array = $query->result_array();
        return $data_array;
    }

    function display_User($id)
    {
        $sql = 'SELECT * FROM p2_users WHERE id_users='.$id;
        $query = $this->db->query($sql);
        $data_array = $query->result_array();
        return $data_array;
    }

    function delete_U($id)
    {
        $sql = 'DELETE FROM p2_users WHERE id_users ='.$id;
        $query = $this->db->query($sql);
    }
    
    function edit_U($id,$username,$first_name,$last_name,$password)
    {
        $sql ='UPDATE p2_users SET Username ="'.$username.'", First_name ="'.$first_name.'",Last_name ="'.$last_name.'",password="'.$password.'"WHERE id_users='.$id;
        $query = $this->db->query($sql);
    }
///////////////////////////////EMPLOYEEMODEL//////////////////////////////////////
    function insertEmploy_data($data)
    {
        $this->db->insert('employees',$data);
    }

    function display_Employdata()
    {
        $sql = 'SELECT * FROM employees';
        $query = $this->db->query($sql);
        $data_array = $query->result_array();
        return $data_array;
    }

    function display_Employee($id)
    {
        // $sql = 'SELECT * FROM employees WHERE id_employ='.$id;
        $query = $this->db->get('employees');
        $data_array = $query->result_array();
        return $data_array;
    }

    function delete_E($id)
    {
        $sql = 'DELETE FROM employees WHERE id_employ ='.$id;
        $query = $this->db->query($sql);
    }

    function edit_E($id,$username,$first_name,$last_name,$password)
    {
        $sql ='UPDATE employees SET Username ="'.$username.'", First_name ="'.$first_name.'",Last_name ="'.$last_name.'",password="'.$password.'"WHERE id_employ='.$id;
        $query = $this->db->query($sql);
    }

    function loginEmp($username,$password)
    {
        $this->db->where('Username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('employees');

        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function loginAdmin($username,$password)
    {
        $this->db->where('Username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('P2_users');

        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
?>