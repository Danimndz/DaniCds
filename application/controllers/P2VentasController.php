<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2VentasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
        
    }
    public function index()
    {   
        $data['discos'] = $this->P2_model->display_data();
        $this->load->view('P2ventas',$data);   
    }
}
?>