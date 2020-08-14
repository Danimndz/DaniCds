<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2mainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
        
    }
    public function index()
    {   
        $this->load->view('P2main');
    }
}
?>