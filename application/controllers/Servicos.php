<?php ob_start();?>
<?php defined('BASEPATH') OR exit('Esta ação não existe');

class Servicos extends CI_Controller
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
			'titulo' => 'Serviços cadastrados',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'servicos' => $this->core_model->get_all('servicos'),
		);

		//echo'<pre>';
		//print_r($data['servicos']);
		//exit();

		$this->load->view('layout/header', $data);
		$this->load->view('servicos/index');
		$this->load->view('layout/footer');

	}

	public function edit($servico_id = NULL)
	{

		if (!$servico_id || !$this->core_model->get_by_id('servicos', array('servico_id' => $servico_id))) {
			$this->session->set_flashdata('error', 'servico não encontrado');
			redirect('servicos');

		} else {

			$this->form_validation->set_rules('servico_nome', '', 'trim|required|max_length[100]|callback_check_nome_servico');
			$this->form_validation->set_rules('servico_preco', '', 'trim|required');
			$this->form_validation->set_rules('servico_descricao', '', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('servico_ativo', '', 'trim|required|max_length[45]');
		

			if ($this->form_validation->run()) {

				$data = elements(
					array(
						'servico_nome',
						'servico_preco',
						'servico_descricao',
						'servico_ativo',

					), $this->input->post()
				);

				$data = html_escape($data);

				// salva no banco de dados
				$this->core_model->update('servicos', $data, array('servico_id' => $servico_id));

				redirect('servicos');

			} else {

				$data = array(
					'titulo' => 'Atualizar servico',
					'scripts' => array(
						'vendor/mask/jquery.mask.min.js',
						'vendor/mask/app.js',
					),
					'servico' => $this->core_model->get_by_id('servicos', array('servico_id' => $servico_id)),
				);
				//echo'<pre>';
				//print_r($data['servico']);
				//exit();

				$this->load->view('layout/header', $data);
				$this->load->view('servicos/edit');
				$this->load->view('layout/footer');

			}
		}
	}

	public function add()
	{
		$this->form_validation->set_rules('servico_nome', '', 'trim|required|min_length[4]|max_length[145]|is_unique[servicos.servico_nome]');
		$this->form_validation->set_rules('servico_preco','','trim|required');
		$this->form_validation->set_rules('servico_descricao', '', 'max_length[500]');

		if ($this->form_validation->run()) {

			$data = elements(
				array(

					'servico_nome',
					'servico_preco',
					'servico_descricao',
					'servico_ativo',


				), $this->input->post()
			);

			$data = html_escape($data);

			// salva no banco de dados
			$this->core_model->insert('servicos', $data);

			redirect('servicos');

		} else {

			$data = array(
				'titulo' => 'Cadastrar serviço',
				'scripts' => array(
					'vendor/mask/jquery.mask.min.js',
					'vendor/mask/app.js',
				),
			);
//				echo'<pre>';
//				print_r($data['servico']);
//				exit();
			$this->load->view('layout/header', $data);
			$this->load->view('servicos/add');
			$this->load->view('layout/footer');

		}
	}

	public function check_nome_servico($servico_nome){

		$servico_id = $this->input->post('servico_id');

		if($this->core_model->get_by_id('servicos', array('servico_nome'=> $servico_nome, 'servico_id !=' => $servico_id))){
			$this->form_validation->set_message('check_nome_servico', 'Este serviço já existe');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function del($servico_id = NULL){

		if(!$servico_id || !$this->core_model->get_by_id('servicos', array('servico_id' => $servico_id))){
			$this->session->set_flashdata('error', 'Serviço  não encontrado');
			redirect('servicos');
		} else {

			$this->core_model->delete('servicos', array('servico_id' => $servico_id));
			redirect('servicos');
		}
	}

}
