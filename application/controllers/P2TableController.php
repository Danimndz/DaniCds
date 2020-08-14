<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2TableController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
        
    }
    public function index()
    {  

            $data['titulo'] = 'Inventory';  
            $data['discos'] = $this->P2_model->display_data();
            $this->load->view('P2table',$data); 
        

    }

    public function P2insert()
    {   
        $config['upload_path'] = 'portadas/';
        $config['allowed_types'] = 'jpg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('portada'))
        {
            $data = $this->upload->data();
            $insert_data = array(
                'Artista' =>$_POST['artist'],
                'Album' => $_POST['Aname'],
                'Cantidad'=> $_POST['quantity'],
                'Precio' => $_POST['price'],
                'Portada' => $data['file_name']
            );
            $this->P2_model->insert_d($insert_data);
        }
        else
        {
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function P2delete()
    {
        $id = $this->input->post('id');
        $this->P2_model->delete_d($id);
    }

    public function selectA()
    {   
        $id = $this->input->post('id');
        $albumData = $this->P2_model->select_album($id);
        echo json_encode($albumData);
    }

    public function editUser()
    {
        $config['upload_path'] = 'portadas/';
        $config['allowed_types'] = 'jpg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('portada'))
        {
            $data = $this->upload->data();
            $id = $_POST['id_discosEdit'];
            $artista = $_POST['artistEdit'];
            $album = $_POST['AnameEdit'];
            $precio = $_POST['precioEdit'];
            $cantidad = $_POST['cantidadEdit'];
            $portada = $data['file_name'];
            $this->P2_model->edit_album($id,$artista,$album,$cantidad,$precio,$portada);
        }
        else
        {
            $error = $this->upload->display_errors();
            echo $error;   
        }

        $id = $_POST['id_discosEdit'];
        $artista = $_POST['artistEdit'];
        $album = $_POST['AnameEdit'];
        $precio = $_POST['precioEdit'];
        $cantidad = $_POST['cantidadEdit'];
        $this->P2_model->edit_albumSinPortada($id,$artista,$album,$cantidad,$precio);

    }

    


}
?>