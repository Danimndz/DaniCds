<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller2 extends CI_Controller {


	public function index()
	{
		$sess_array = array(
			'Id' => "0206151",
			'Nombre' => 'DaniM',
			'Logged_in' => TRUE);
		$this->session->set_userdata('user',$sess_array);
		$var = 'Hola desde el controlador';
		$datos['Saludo'] = $var;
		$datos['Cuerpo'] = 'Hola soy el cuerpo de tu pagina desde el controlador';
		$datos['Footer'] = 'Hola soy el footer desde el controlador';
		$this->load->view('P2header');
		$this->load->view('P2dashboard');
		// $this->load->view('P2dashbody',$datos);
		// $this->load->view('footer',$datos);
    }
	public function getId($iD)
	{
		$this->load->view('header');
		$sess_array = array();
		$p1 = array(
			'Id' => 10,
			'Nombre' => 'Dani',
			'Edad' => '24 años',
			'Puesto' => 2);
		$p2 = array(
			'Id' => 20,
			'Nombre' => 'Juan',
			'Edad' => '33 años',
			'Puesto' => 2);
		$p3 = array(
			'Id' => 30,
			'Nombre' => 'Pedro',
			'Edad' => '14 años',
			'Puesto' => 5);
		$p4 = array(
			'Id' => 40,
			'Nombre' => 'Ramon',
			'Edad' => '26 años',
			'Puesto' => 4);
		$p5 = array(
			'Id' => 50,
			'Nombre' => 'Rigoberto',
			'Edad' => '28 años',
			'Puesto' => 5);
		array_push($sess_array,$p1);
		array_push($sess_array,$p2);
		array_push($sess_array,$p3);
		array_push($sess_array,$p4);
		array_push($sess_array,$p5);
		
		for ($i=0; $i<sizeof($sess_array); $i++)
		{
			if($iD == $sess_array[$i]['Id'])
			{
				if($sess_array[$i]['Puesto'] == 5)
				{
					$this->load->view('EmpleadoGral');
				}
				elseif($sess_array[$i]['Puesto'] ==4)
				{
					$this->load->view('Jefote');
				}
				elseif($sess_array[$i]['Puesto'] ==2)
				{
					$this->load->view('Gerente');
				}
			}
		}
		$this->load->view('footer');
	}

    public function about()
    {
        $this->load->view("losangeles");
    }

    public function fibonacci($n)
    {
		$r = 0;
		if($n<=0) echo 0;
		elseif($n==1) echo 1;
		else
		{
			for ($i=0; $i < $n; $i++) { 
				$r = ($n-1)+($n-2);
			}
			echo $r;
		}
	}
	


}