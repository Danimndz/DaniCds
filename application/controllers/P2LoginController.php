<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
        
        
    }
    public function index()
    {    
        $this->load->view('P2login'); 
    }
    
    public function checkUser()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('pass','Password','required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            if($this->P2_model->loginEmp($username,$password))
            {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'P2LoginController/re_Direct');
            }
            else
            {
                $this->session->set_flashdata('error','Invalid username or password');
                redirect(base_url().'P2LoginController/index');
            }
        }
        else
        {
            $this->index();
        }
    }

    public function re_Direct()
    {
        if($this->session->userdata('username')!='')
        {
            redirect(base_url().'P2VentasController/index');
        }
        else
        {
            redirect(base_url().'P2LoginController/index');
        }
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        $this->load->view('P2main');
    }
}
?>