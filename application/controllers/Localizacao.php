<?php

defined('BASEPATH') or exif_imagetype('Ação não permitida');

class Localizacao extends CI_Controller
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
			'titulo' => 'Localização no mapa',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'markers' => $this->core_model->get_all('markers'), // get all mapa
		);

//			echo '<pre>';
//			print_r($data['markers']);
//				exit();

		$this->load->view('layout/header',$data);
		$this->load->view('localizacao/index');
		$this->load->view('layout/footer');

	}

	public function map()
	{
		$data = array(
			'titulo' => 'teste de mapa',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'markers' => $this->core_model->get_all('markers'), // get all mapa
		);

//			echo '<pre>';
//			print_r($data['markers']);
//				exit();

		$this->load->view('layout/header',$data);
		$this->load->view('localizacao/map');
		$this->load->view('layout/footer');

	}





}
