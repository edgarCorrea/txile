<?php
ob_start();
defined('BASEPATH') or exit('Ação não permitida');

class Pagar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('info', 'Sua sessão expirou');
			redirect('login');
		}
		$this->load->model('financeiro_model');

	}
	public function index()
	{

		$data = array(
			'titulo' => 'Contas a pagar cadastradas',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'contas_pagar' => $this->financeiro_model->get_all_pagar(),
		);
//		echo '<pre>';
//		print_r($data['contas_pagar']);
//		exit();


		$this->load->view('layout/header', $data);
		$this->load->view('pagar/index');
		$this->load->view('layout/footer');
	}

	public function edit($conta_pagar_id = NULL){
		if(!$conta_pagar_id ||  !$this->core_model->get_by_id('contas_pagar', array('conta_pagar_id' => $conta_pagar_id))){
				$this->session->set_flashdata('error', 'Conta não encontrada');
				redirect('pagar');
			}else{
			// form_validation


			$data = array(
				'titulo' => 'Contas a pagar cadastradas',
				'styles' => array(
					'vendor/select2/select2.min.css',
				),
				'scripts' => array(
					'vendor/Select2/select2.min.js',
					'vendor/Select2/app.js',


				),
				'conta_pagar' => $this->core_model->get_by_id('contas_pagar', array('conta_pagar_id' => $conta_pagar_id)),
				'fornecedores' =>$this->core_model->get_all('fornecedores'),

			);
//		echo '<pre>';
//		print_r($data['contas_pagar']);
//		exit();


			$this->load->view('layout/header', $data);
			$this->load->view('pagar/edit');
			$this->load->view('layout/footer');

		}

	}
}
