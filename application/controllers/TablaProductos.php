<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TablaProductos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Star_model');
    }
    public function index()
    {    $data['datos'] = $this->Star_model->displayElements();
        $this->load->view('tablaIsaac',$data); 
    }

    public function show_Product()
    {
        $id = $this->input->post('id');
       $productos=$this ->Star_model->displayPedidosProductos($id);
       echo json_encode($productos);
    }

    public function checkIf($id)
    {
        if($this->Star_model->check($id)){
            return 1;
        }else{
            return 0;
        }
    }

    public function display_grades()
    {
        $id = $this->input->post('id');
        $calificacion = $this->Star_model->displayGrades($id);
        echo json_encode($calificacion);
    }
}
?>