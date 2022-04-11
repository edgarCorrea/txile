<?php
ob_start();
defined('BASEPATH') or exit('Ação não permitida');

class Produtos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('info', 'Sua sessão expirou');
			redirect('login');
		}
		$this->load->model('produtos_model');

	}

	public function index()
	{

		$data = array(
			'titulo' => 'Produtos Cadastrados',
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),
			'produtos' => $this->produtos_model->get_all(),
		);
//		echo '<pre>';
//		print_r($data['produtos']);
//		exit();

//		[produto_id] => 2
//            [produto_codigo] => 50412637
//            [produto_data_cadastro] =>
//            [produto_categoria_id] => 1
//            [produto_marca_id] => 2
//            [produto_fornecedor_id] => 1
//            [produto_descricao] => Fone de ouvido gamer
//			  [produto_unidade] => UN
//			  [produto_codigo_barras] => 9999
//            [produto_ncm] => 9999
//            [produto_preco_custo] => 112,00
//            [produto_preco_venda] => 125.844,00
//            [produto_estoque_minimo] => 1
//            [produto_qtde_estoque] => 46
//            [produto_ativo] => 1
//            [produto_obs] =>
//            [produto_data_alteracao] => 2022-02-09 13:11:01
//            [categoria_id] => 1
//            [produto_categoria] => Reprocesso
//		  	  [marca_id] => 2
//            [produto_marca] => 2AM Gamingsdfsfsf
//		      [fornecedor_id] => 1
//            [produto_fornecedor] => Junkeira automação

		$this->load->view('layout/header', $data);
		$this->load->view('produtos/index');
		$this->load->view('layout/footer');
	}

	public function add()
	{


			$this->form_validation->set_rules('produto_descricao', '','trim|required|min_length[5]|max_length[100]|is_unique[produtos.produto_descricao]');
			$this->form_validation->set_rules('produto_unidade','Produto Unidade','trim|required|min_length[2]|max_length[5]');
			$this->form_validation->set_rules('produto_preco_custo','Preço de custo','trim|required|max_length[45]');
			$this->form_validation->set_rules('produto_preco_venda','Preço de venda','trim|required|max_length[45]|callback_check_produto_preco_venda');
			$this->form_validation->set_rules('produto_estoque_minimo','Estoque minimo','trim|required|greater_than_equal_to[0]');
			$this->form_validation->set_rules('produto_qtde_estoque','Quantidade em estoque','trim|required');
			$this->form_validation->set_rules('produto_obs','Observação','trim|max_length[200]');



			if ($this->form_validation->run()) {


				$data = elements(
					array(
						'produto_codigo',
						'produto_categoria_id',
						'produto_marca_id',
						'produto_fornecedor_id',
						'produto_descricao',
						'produto_unidade',
						'produto_preco_custo',
						'produto_preco_venda',
						'produto_estoque_minimo',
						'produto_qtde_estoque',
						'produto_ativo',
						'produto_obs',


					),$this->input->post()
				);

				$data = html_escape($data);

//			echo'<pre>';
//			print_r($data);
//			exit();

				$this->core_model->insert('produtos', $data);
				redirect('produtos');


			} else {


				$data = array(
					'titulo' => 'Cadastrar produto',
					'scripts' => array(
						'vendor/mask/jquery.mask.min.js',
						'vendor/mask/app.js',
					),
					'produto_codigo'=>$this->core_model->generate_unique_code('produtos','numeric', 8, 'produto_codigo'),
					'marcas' => $this->core_model->get_all('marcas', array('marca_ativa => 1')),
					'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa => 1')),
					'fornecedores' => $this->core_model->get_all('fornecedores', array('fornecedores_ativo => 1')),
				);
				//echo'<pre>';
				//print_r($data['produtos']);
				//exit();

				$this->load->view('layout/header', $data);
				$this->load->view('produtos/add');
				$this->load->view('layout/footer');

			}
	}

	public function edit($produto_id = NULL)
	{

		if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
			$this->session->set_flashdata('error', 'Produto não encontrado');
			redirect('produtos');

		} else {

			$this->form_validation->set_rules('produto_descricao', '','trim|required|min_length[5]|max_length[100]|callback_check_produto_descricao');
			$this->form_validation->set_rules('produto_unidade','Produto Unidade','trim|required|min_length[2]|max_length[5]');
			$this->form_validation->set_rules('produto_preco_custo','Preço de custo','trim|required|max_length[45]');
			$this->form_validation->set_rules('produto_preco_venda','Preço de venda','trim|required|max_length[45]|callback_check_produto_preco_venda');
			$this->form_validation->set_rules('produto_estoque_minimo','Estoque minimo','trim|required|greater_than_equal_to[0]');
			$this->form_validation->set_rules('produto_qtde_estoque','Quantidade em estoque','trim|required');
			$this->form_validation->set_rules('produto_obs','Observação','trim|max_length[200]');



			if ($this->form_validation->run()) {


			$data = elements(
				array(
					'produto_codigo',
					'produto_categoria_id',
					'produto_marca_id',
					'produto_fornecedor_id',
					'produto_descricao',
					'produto_unidade',
					'produto_preco_custo',
					'produto_preco_venda',
					'produto_estoque_minimo',
					'produto_qtde_estoque',
					'produto_ativo',
					'produto_obs',


				),$this->input->post()
			);

			$data = html_escape($data);

//			echo'<pre>';
//			print_r($data);
//			exit();

			$this->core_model->update('produtos', $data, array('produto_id'=>$produto_id));
			redirect('produtos');


			} else {


				$data = array(
					'titulo' => 'Atualizar produto',
					'scripts' => array(
						'vendor/mask/jquery.mask.min.js',
						'vendor/mask/app.js',
					),
					'produto' => $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id)),
					'marcas' => $this->core_model->get_all('marcas', array('marca_ativa => 1')),
					'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa => 1')),
					'fornecedores' => $this->core_model->get_all('fornecedores', array('fornecedores_ativo => 1')),
				);
				//echo'<pre>';
				//print_r($data['produtos']);
				//exit();

				$this->load->view('layout/header', $data);
				$this->load->view('produtos/edit');
				$this->load->view('layout/footer');

			}
		}
	}
	
	public function del($produto_id = NULL){

		if(!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))){
			$this->session->set_flashdata('error', 'Produto não econtrada');
		}else{
			$this->core_model->delete('produtos', array('produto_id'=> $produto_id));
			redirect('produtos');

		}
	}

	public function check_produto_descricao($produto_descricao)
	{
		$produto_id = $this->input->post('produto_id');

		if($this->core_model->get_by_id('produtos', array('produto_descricao' => $produto_descricao, 'produto_id !=' => $produto_id))){

			$this->form_validation->set_message('check_produto_descricao','Esse produto já existe');
			return false;

		}else{
			return true;
		}

	}
	public function check_produto_preco_venda($produto_preco_venda){

		$produto_preco_custo = $this->input->post('produto_preco_custo');
		//tratando para tirar o ponto e virgula para inserir no banco
		$produto_preco_custo = str_replace('.','', $produto_preco_custo);
		$produto_preco_venda = str_replace('.','', $produto_preco_venda);
		$produto_preco_custo = str_replace(',','', $produto_preco_custo);
		$produto_preco_venda = str_replace(',','', $produto_preco_venda);

		if($produto_preco_custo > $produto_preco_venda){
			$this->form_validation->set_message('check_produto_preco_venda', 'Preço de venda tem que ser maior ou igual a preço de custo');
			return false;

		}else{

			return true;

		};

	}

}
