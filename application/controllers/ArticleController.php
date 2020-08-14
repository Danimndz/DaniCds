<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('Articulo_model');
    }

    public function index()
    {
        $data = $this->Articulo_model->get_last_articles(5);
        $datos['data'] = $data;
        $this->load->view('header');
        $this->load->view('body',$data);
    }

    public function getArticles()
    {
        $var = $this->input->post("num");
        $data = $this->Articulo_model->get_last_articles($var);
        echo json_encode($data);
    }

    public function deleteArticles()
    {
        $var = $this->input->post('num');
        $data = $this->Articulo_model->delete_id($var);
        return getArticles();
    }

    
}
?>