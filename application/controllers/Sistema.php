<?php
ob_start();
defined('BASEPATH') or exit('Ação não permituda');

class Sistema extends CI_Controller
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
			'titulo' => 'Editar informações do sistema',

	'scripts' => array(
	'vendor/mask/jquery.mask.min.js',
	'vendor/mask/app.js'
),

			'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
		);

		
		$this->form_validation->set_rules('sistema_razao_social', 'Razão social', 'required|min_length[10]|max_length[145]');
		$this->form_validation->set_rules('sistema_nome_fantasia', 'Nome fantasia', 'required|min_length[10]|max_length[145]');
		$this->form_validation->set_rules('sistema_cnpj', 'Cnpj', 'required|exact_length[18]');
		$this->form_validation->set_rules('sistema_ie','inscrição estadual','required|max_length[25]');
		$this->form_validation->set_rules('sistema_telefone_fixo','Telefone fixo','required | max_length[25]');
		$this->form_validation->set_rules('sistema_telefone_fixo','Telefone movel','required|max_length[25]');
		$this->form_validation->set_rules('sistema_email','E-mail','required|valid_email|max_length[100]');
		$this->form_validation->set_rules('sistema_site_url','URL do site','required|valid_url|max_length[100]');
		$this->form_validation->set_rules('sistema_cep','CEP','required|exact_length[9]');
		$this->form_validation->set_rules('sistema_endereco','Endereço','required|max_length[145]');
		$this->form_validation->set_rules('sistema_numero','Numero','required|max_length[25]');
		$this->form_validation->set_rules('sistema_cidade','Cidade','required|max_length[45]');
		$this->form_validation->set_rules('sistema_estado','Estado','required');
		$this->form_validation->set_rules('sistema_txt_ordem_servico','Texto de ordem de serviço e venda','required|max_length[500]');


		if ($this->form_validation->run()) {

			//debug
		/*	echo '<pre>';
			print_r($data['sistema']);
			exit();
				[sistema_id] => 1
				[sistema_razao_social] => System order inc
				[sistema_nome_fantasia] => Sistema de ordem de serviço
				[sistema_cnpj] => 58.962.064/0001-53
				[sistema_ie] =>
				[sistema_telefone_fixo] =>
				[sistema_telefone_movel] =>
				[sistema_email] => ordem@ordem.com.br
				[sistema_site_url] => http://localhost/txile.mypressonline.com/home
				[sistema_cep] => 89254152
				[sistema_endereco] => Rua josé do patrocinio
				[sistema_numero] => 36
				[sistema_cidade] => Jaraguá do Sul
				[sistema_estado] => SC
				[sistema_txt_ordem_servico] =>
				[sistema_data_alteracao] => 2021-07-14 19:28:59
		*/
			$data = elements(
				array(
				'sistema_razao_social',
				'sistema_nome_fantasia',
				'sistema_cnpj',
				'sistema_ie',
				'sistema_telefone_fixo',
				'sistema_telefone_movel',
				'sistema_email',
				'sistema_site_url',
				'sistema_cep',
				'sistema_endereco',
				'sistema_numero',
				'sistema_cidade',
				'sistema_estado',
				'sistema_txt_ordem_servico',
			), $this->input->post()
		);

			$data = html_escape($data);
			$this->core_model->update('sistema',$data,array('sistema_id' => 1));
			redirect('sistema');

		} else {


			$this->load->view('layout/header', $data);
			$this->load->view('sistema/index');
			$this->load->view('layout/footer');
		}
	}
}




