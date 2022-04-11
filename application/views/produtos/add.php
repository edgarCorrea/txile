<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('produtos') ?>">produtos</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">


					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fab fa-product-hunt"></i>&nbsp;Dados do produto</legend>
						<div class="form-group row">

							<div class="col-md-4">

								<label>Código interno do Produto</label>
								<input type="text" class="form-control form-control-user" name="produto_codigo" readonly
									   value="<?php echo $produto_codigo ?>">
							</div>
							<div class="col-md-8 ">

								<label>Descrição do produto</label>
								<input type="text" class="form-control form-control-user "
									   name="produto_descricao"
									   placeholder="Descrição do produto"
									   value="<?php echo set_value('produto_descricao') ?>">
								<?php echo form_error('produto_descricao', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>

						<div class="form-group row">

							<div class="col-md-3 MB-3">

								<label>Marca</label>
								<select class="custom-select" name="produto_marca_id">
									<?php foreach ($marcas as $marca) : ?>
										<option value="<?php echo $marca->marca_id ?>"<?php echo($marca->marca_ativa == 0 ? 'disabled style="color: #EF4A4A"' : '') ?>><?php echo $marca->marca_nome ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="col-md-3 MB-3">
								<label>Categorias</label>
								<select class="custom-select" name="produto_categoria_id">
									<?php foreach ($categorias as $categoria) : ?>

										<option value="<?php echo $categoria->categoria_id ?>" <?php echo($categoria->categoria_ativa == 0 ? 'disabled style="color: #EF4A4A"' : '') ?>><?php echo $categoria->categoria_nome ?></option>
									<?php endforeach ?>

								</select>
							</div>
							<div class="col-md-3 MB-3">
								<label>Fornecedor</label>
								<select class="custom-select" name="produto_fornecedor_id">
									<?php foreach ($fornecedores as $fornecedor) : ?>

										<option value="<?php echo $fornecedor->fornecedor_id ?>" <?php echo($categoria->categoria_ativa == 0 ? 'disabled style="color: #EF4A4A"' : '') ?>><?php echo $fornecedor->fornecedor_nome_fantasia ?></option>
									<?php endforeach ?>

								</select>
							</div>
							<div class="col-md-3 MB-3">
								<label>Produto Unidade</label>
								<input type="text" class="form-control form-control-user "
									   name="produto_unidade"
									   placeholder="Unidade do produto"
									   value="<?php echo set_value('produto_unidade') ?>">
								<?php echo form_error('produto_unidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

						</div>


					</fieldset>

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fab fa-funnel-dollar"></i>&nbsp;&nbsp;Precificação do
							produto
						</legend>
						<div class="form-group row">

							<div class="col-md-3 MB-3">
								<label>Preço Custo</label>
								<input type="text" class="form-control form-control-user money "
									   name="produto_preco_custo"
									   placeholder="Custo Produto"
									   value="<?php echo set_value('produto_preco_custo') ?>">
								<?php echo form_error('produto_preco_custo', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3 MB-3">
								<label>Preço Venda</label>
								<input type="text" class="form-control form-control-user money "
									   name="produto_preco_venda"
									   placeholder="Preço venda"
									   value="<?php echo set_value('produto_preco_venda') ?>">
								<?php echo form_error('produto_preco_venda', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3 MB-3">
								<label>Quantidade Estoque</label>
								<input type="text" class="form-control form-control-user"
									   name="produto_qtde_estoque"
									   placeholder="Quantidade Estoque"
									   value="<?php echo set_value('produto_qtde_estoque') ?>">
								<?php echo form_error('produto_qtde_estoque', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3 MB-3">
								<label>Quantidade Estoque minino</label>
								<input type="text" class="form-control form-control-user"
									   name="produto_estoque_minimo"
									   placeholder="Quantidade Estoque"
									   value="<?php echo set_value('produto_estoque_minimo') ?>">
								<?php echo form_error('produto_estoque_minimo', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

						</div>

						<div class="form-group row">

							<div class="col-md-3 MB-3">
								<label>Produto ativo</label>
								<select class="custom-select" name="produto_ativo">

									<option value="0">Não</option>
									<option value=1">Sim</option>


								</select>
							</div>
							<div class="col-md-9 mb-3">
								<labe>Observações do Produto</labe>
								<textarea class="form-control" name="produto_obs"></textarea>
							</div>

					</fieldset>

					<div class="form-group row mb-3 mt-4">

						<div class="col-md-4">
							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>

							<a title="Voltar" href="<?php echo base_url($this->router->fetch_class()) ?>"
							   class="btn btn-success btn-sm ml-2">
								Voltar <a/>

						</div>
					</div>

				</form>
			</div>


		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
