<?php
ob_start();
defined('BASEPATH') or exif_imagetype('Ação não permitida');

class Producao extends CI_Controller
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
			'titulo' => 'Produção em processo',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'produtivo' => $this->core_model->get_all('producao'), // get all users
		);


		$this->load->view('layout/header', $data);
		$this->load->view('producao/index');
		$this->load->view('layout/footer');

	}

	public function add_producao()
	{

		$data = array(
			'titulo' => 'Cadastrar producao',
		);

			$this->form_validation->set_rules('producao_lote', ' Número do lote', 'trim|required');
			$this->form_validation->set_rules('producao_data_inicial', 'Data inicial', 'trim|required');
			$this->form_validation->set_rules('producao_data_entrega', 'Data entrega', 'trim|required');
			$this->form_validation->set_rules('producao_qntd', 'Quantidade', 'trim|required');
			$this->form_validation->set_rules('producao_preco_unitario','Preço unitário','trim|required');


		//	if ($this->form_validation->run())
		//	{

		//xss_clean é utilizado para não ser cadastrado códigos maliciosos

		//	$username = $this->security->xss_clean($this->input->post('username'));
		//	$password = $this->security->xss_clean($this->input->post('password'));
		//$email = $this->security->xss_clean($this->input->post('email'));
		//	$additional_data = array(
		//	'username'=> $this->input->post('username'),
		//	'first_name' => $this->input->post('first_name'),
		//	'last_name' => $this->input->post('last_name'),
		//		'company'=> $this->input->post('company'),
		//			'active' => $this->input->post('active'),
//	);

		//		$group = array($this->input->post('perfil_usuario'));

		//	$additional_data = $this->security->xss_clean($additional_data);
		//	$group = $this->security->xss_clean($group);


		//alterar ion_auth_model 852 para nao deixar atico automatico
		//	if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {

		//	$this->session->set_flashdata('sucesso', 'Dados Salvos com sucesso');
		//	} else {
		//			$this->session->set_flashdata('error', 'Erro ao salvar os dados');
		//		}
		//	redirect('usuarios');


		//   echo '<pre>';
		//   print_r($additional_data);
		//  exit();
		//	} else {

		//erro de validação

		$data = array(
			'titulo' => ' Cadastrar produção',
		);

		$this->load->view('layout/header', $data);
		$this->load->view('producao/add_producao');
		$this->load->view('layout/footer');
		//	}
	}


}


