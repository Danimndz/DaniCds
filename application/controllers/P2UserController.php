<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2_model');
        
    }
    public function index()
    {
        $data['titulo'] = 'User';
        $data['p2_users'] = $this->P2_model->display_Userdata();
        $data['employees'] = $this->P2_model->display_Employdata();
        $this->load->view('P2user',$data);
    }

    public function insertUser()
    {   
        $userData = array(
            'Username' => $_POST['uname_'],
            'First_name'=> $_POST['fname_'],
            'Last_name'=> $_POST['lname_'],
            'password'=> $_POST['password_'],
        );

        $this->P2_model->insertUser_data($userData);
    }

    public function delete_User()
    {
        $id = $this->input->post('id');
        $this->P2_model->delete_U($id);
    }

    public function select_User()
    {
        $id = $this->input->post('id');
        $userD = $this->P2_model->display_User($id);
        echo json_encode($userD);
    }

    public function edit_User()
    {
        
        $id =$_POST['id_userEdit'];
        $username = $_POST['username_edit'];
        $first_name = $_POST['fname_edit'];
        $last_name =$_POST['lname_edit'];
        $password = $_POST['password_edit'];

        $this->P2_model->edit_U($id,$username,$first_name,$last_name,$password);
    }
    // //////////////////////////////////////////ADMIN///////////////////////////////////////////
    public function insertEmp()
    {   
        $EmpData = array(
            'Username' => $_POST['uname_E'],
            'First_name'=> $_POST['fname_E'],
            'Last_name'=> $_POST['lname_E'],
            'password'=> $_POST['password_E'],
        );

        $this->P2_model->insertEmploy_data($EmpData);
    }

    public function delete_Emp()
    {
        $id = $this->input->post('id');
        $this->P2_model->delete_E($id);
    }

    public function select_Emp()
    {
        $id = $this->input->post('id');
        $EmpD = $this->P2_model->display_Employee($id);
        echo json_encode($EmpD);
    }

    public function edit_Emp()
    {
        
        $id =$_POST['id_empEdit'];
        $username = $_POST['usernameE_edit'];
        $first_name = $_POST['fnameE_edit'];
        $last_name =$_POST['lnameE_edit'];
        $password = $_POST['passwordE_edit'];

        $this->P2_model->edit_E($id,$username,$first_name,$last_name,$password);
    }
}
?>