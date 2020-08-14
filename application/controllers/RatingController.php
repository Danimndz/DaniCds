<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Star_model');
    }
    public function index()
    {    
        $this->load->view('rating'); 
    }

    public function add_grade()
    {
        $num = $this->input->post('num');
        for ($i=1; $i <= $num; $i++)
        { 
            $califData = array(
                'id_cliente' => $this->input->post('hidden_cliente'),
                'id_producto' => $this->input->post('hidden_Producto'.$i),
                'id_pedido' => $this->input->post('hidden_pedido'),
                'comentarios' => $this->input->post('comentarios'),
                'calificacion_1' => $this->input->post('star_calidad_'.$i),
                'calificacion_2' => $this->input->post('star_servicio_'.$i),
                'calificacion_3' => $this->input->post('star_entrega_'.$i),
            );

            $this->Star_model->insert_values($califData);
        }
    }
}
?>