<?php
defined('BASEPATH') OR die ('Ação não autorizada');


class Arquivos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('info', 'Sua sessão expirou');
			redirect('login');
		}
	}

	public function index()
	{

		$data = array(
			'titulo' => 'Marcas cadastradas',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables.jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
//			'marcas' => $this->core_model->get_all('marcas'),
		);

		$this->load->view('layout/header', $data);
		$this->load->view('arquivos/index');
		$this->load->view('layout/footer');
	}

	public function add()
	{
		if(isset($_POST["submit_file"]))
		{
			$file = $_FILES["file"]["tmp_name"];
			$file_open = fopen($file,"r");
			while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
			{
				$name = $csv[0];
				$age = $csv[1];
				$country = $csv[2];
				mysql_query("INSERT INTO employee VALUES ('$name','$age','country')");
			}
		}
			redirect('arquivos');

			$this->load->view('layout/header');
			$this->load->view('arquivos/add');
			$this->load->view('layout/footer');

		}


}
