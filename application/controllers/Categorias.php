<?php
ob_start();
defined('BASEPATH') or exit('Ação não permitida');

class Categorias extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		if (!$this->ion_auth->logged_in()) {
			$this->session-> set_flashdata('info', 'Sua sessão expirou');
			redirect('login');
		}

	}

	public function index()
	{
		$data = array(
			'titulo' => 'Categorias cadastradas',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables.jquery.dataTables.min.js',
				'vendor/datatables.dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'categorias' => $this->core_model->get_all('categorias'),
		);

		$this->load->view('layout/header', $data);
		$this->load->view('categorias/index');
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('categoria_nome', '', 'trim|required|min_length[4]|max_length[145]|is_unique[categorias.categoria_nome]');


		if ($this->form_validation->run()) {

			$data = elements(
				array(

					'categoria_nome',
					'categoria_ativa',


				), $this->input->post()
			);
			$data = html_escape($data);

			// salva no banco de dados
			$this->core_model->insert('categorias', $data);

			redirect('categorias');

		} else {

			$data = array(
				'titulo' => 'Cadastrar categorias',
				'scripts' => array(
					'vendor/mask/jquery.mask.min.js',
					'vendor/mask/app.js',
				),
			);
//				echo'<pre>';
//				print_r($data['servico']);
//				exit();
			$this->load->view('layout/header', $data);
			$this->load->view('categorias/add');
			$this->load->view('layout/footer');

		}
	}

	public function edit($categoria_id = NULL)
	{

		if (!$categoria_id || !$this->core_model->get_by_id('categorias', array('categoria_id' => $categoria_id))) {
			$this->session->set_flashdata('error', 'categoria não encontrado');
			redirect('categorias');

		} else {

			$this->form_validation->set_rules('categoria_nome', '', 'trim|required|max_length[100]|callback_check_nome_categoria');


			if ($this->form_validation->run()) {

				$categoria_ativa = $this->input->post('categoria_ativa');
				if ($this->db->table_exists('produtos')) {

					if ($categoria_ativa == 0 && $this->core_model->get_by_id('produtos', array('produto_categoria_id' => $categoria_id, 'produto_ativo' => 1))) {
						$this->session->set_flashdata('error', 'Esta categoria não pode ser desativada, pois esta sendo utilizada em Produtos');
						redirect('categorias');
					}
				}

				$data = elements(
					array(
						'categoria_nome',
						'categoria_ativa',

					), $this->input->post()
				);

				$data = html_escape($data);

				// salva no banco de dados
				$this->core_model->update('categorias', $data, array('categoria_id' => $categoria_id));

				redirect('categorias');

			} else {

				$data = array(
					'titulo' => 'Atualizar categoria',
					'scripts' => array(
						'vendor/mask/jquery.mask.min.js',
						'vendor/mask/app.js',
					),
					'categoria' => $this->core_model->get_by_id('categorias', array('categoria_id' => $categoria_id)),
				);
				//echo'<pre>';
				//print_r($data['servico']);
				//exit();

				$this->load->view('layout/header', $data);
				$this->load->view('categorias/edit');
				$this->load->view('layout/footer');

			}
		}
	}

	public function del($categoria_id = NULL)
	{

		if (!$categoria_id || !$this->core_model->get_by_id('categorias', array('categoria_id' => $categoria_id))) {
			$this->session->set_flashdata('error', 'categoria não econtrada');
		} else {
			$this->core_model->delete('categorias', array('categoria_id' => $categoria_id));
			redirect('categorias');

		}
	}

	public function check_nome_categoria($categoria_nome)
	{

		$categoria_id = $this->input->post('categoria_id');

		if ($this->core_model->get_by_id('categorias', array('categoria_nome' => $categoria_nome, 'categoria_id !=' => $categoria_id))) {
			$this->form_validation->set_message('check_nome_categoria', 'Esta categoria ja existe');
			return false;
		} else {
			return true;
		}

	}
}
