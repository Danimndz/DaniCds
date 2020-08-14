<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2shoppingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
    }

    public function index(){
        $data['discos'] = $this->session->userdata('discos_arr');
        $data['total'] = array_reduce($data['discos'],function($carry,$item){
            return $carry + $item['Precio'];
        });
        $this->load->view('P2shoppingCart',$data);
    }

    public function add_discos()
    {   
       $discos = array();
       $indices = array_count_values($this->input->post('discos'));
       foreach($indices as $key => $value){
        $disco = $this->P2_model->select_album($key);
        $disco['Cantidad'] = $value;
        array_push($discos,$disco);
       }
       $this->session->set_userdata('discos_arr',$discos);
       echo true;
    }

    public function ventasDel(){
        $lista_discos = $this->session->userdata('discos_arr');
        foreach($lista_discos as $disco){
           $this->P2_model->update_quantity($disco['id_discos'],$disco['Cantidad']);
        }
        $arr_vacio = array();
        $this->session->set_userdata('discos_arr',$arr_vacio);
        $data['discos'] = $this->session->userdata('discos_arr');
        $data['total'] = 0;
        $this->load->view('P2shoppingCart',$data);

    }
}
?>