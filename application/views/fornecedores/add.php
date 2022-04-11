<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('fornecedores') ?>">Fornecedores</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">

					<?php if (isset($fornecedor)): ?>
						<p><strong><i class="fas fa-clock">&nbsp;Última
									alteração: </i></strong>&nbsp;<?php echo formata_data_banco_com_hora($fornecedor->fornecedor_data_alteracao); ?>
						</p>
					<?php endif; ?>
					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados do fornecedor</legend>
						<div class="form-group row">

							<div class="col-md-5">

								<label>Razão social</label>
								<input type="text" class="form-control form-control-user" name="fornecedor_razao"
									   placeholder="Razão social"
									   value="<?php echo set_value('fornecedor_razao') ?>">
								<?php echo form_error('fornecedor_razao', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4 ">

								<label>Nome fantasia</label>
								<input type="text" class="form-control form-control-user"
									   name="fornecedor_nome_fantasia"
									   placeholder="Nome fantasia"
									   value="<?php echo set_value('fornecedor_nome_fantasia') ?>">
								<?php echo form_error('fornecedor_nome_fantasia', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3">
								<label>CNPJ</label>
								<input type="input" class="form-control form-control-user cnpj "
									   name="fornecedor_cnpj"
									   placeholder="Cnpj"
									   value="<?php echo set_value('fornecedor_cnpj') ?>">
								<?php echo form_error('fornecedor_cnpj', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

						<div class="form-group row">

							<div class="col-md-4 ">
								<label>Inscrição estadual</label>

								<input type="text" class="form-control form-control-user" name="fornecedor_ie"
									   placeholder="Inscrição estadual"
									   value="<?php echo set_value('fornecedor_ie') ?>">
								<?php echo form_error('fornecedor_ie', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4 ">

								<label>Telefone fixo</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="fornecedor_telefone"
									   placeholder="Telefone Fixo"
									   value="<?php echo set_value('fornecedor_telefone') ?>">
								<?php echo form_error('fornecedor_telefone', ' <small class="form-text text-danger">', '</small>'); ?>


							</div>
							<div class="col-md-4">
								<label>Email</label>
								<input type="text" class="form-control form-control-user  " name="fornecedor_email"
									   placeholder="Email"
									   value="<?php echo set_value('fornecedor_email') ?>">
								<?php echo form_error('fornecedor_email', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-group row">

							<div class="col-md-3">

								<label>Telefone celular</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="fornecedor_celular" placeholder="Telefone celular"
									   value="<?php echo set_value('fornecedor_celular') ?>">
								<?php echo form_error('fornecedor_celular', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3">

								<label>Nome Atendente</label>
								<input type="text" class="form-control form-control-user "
									   name="fornecedor_contato" placeholder="Nome do atendente"
									   value="<?php echo set_value('fornecedor_contato') ?>">
								<?php echo form_error('fornecedor_contato', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

						</div>

					</fieldset>
					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class=""><i class="fas fa-map-marker-alt"></i></i>&nbsp;Dados de
							Endereço
						</legend>

						<div class="form-group row mb-3">

							<div class="col-md-4">
								<label>Endereço</label>
								<input type="text" class="form-control form-control-user" name="fornecedor_endereco"
									   placeholder="Endereço do fornnecedor"
									   value="<?php echo set_value('fornecedor_endereco') ?>">
								<?php echo form_error('fornecedor_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Número</label>
								<input type="text" class="form-control form-control-user"
									   name="fornecedor_numero_endereco"
									   placeholder="Numero endereco"
									   value="<?php echo set_value('fornecedor_numero_endereco') ?>">
								<?php echo form_error('fornecedor_numero_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Complemento</label>
								<input type="text" class="form-control form-control-user " name="fornecedor_complemento"
									   placeholder="Complemento"
									   value="<?php echo set_value('fornecedor_complemento') ?>">
								<?php echo form_error('fornecedor_complemento', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
						<div class="form-group row mb-3">

							<div class="col-md-4">

								<label>Bairro</label>
								<input type="text" class="form-control form-control-user" name="fornecedor_bairro"
									   placeholder="Bairro"
									   value="<?php echo set_value('fornecedor_bairro') ?>">
								<?php echo form_error('fornecedor_bairro', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>Cep</label>
								<input type="text" class="form-control form-control-user cep " name="fornecedor_cep"
									   placeholder="Cep"
									   value="<?php echo set_value('fornecedor_cep') ?>">
								<?php echo form_error('fornecedor_cep', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Cidade</label>
								<input type="text" class="form-control form-control-user  " name="fornecedor_cidade"
									   placeholder="cidade"
									   value="<?php echo set_value('fornecedor_cidade') ?>">
								<?php echo form_error('fornecedor_cidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>UF</label>
								<input type="text" class="form-control form-control-user uf" name="fornecedor_estado"
									   placeholder="Estado"
									   value="<?php echo set_value('fornecedor_estado') ?>">
								<?php echo form_error('fornecedor_estado', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
					</fieldset>

					<fieldset class="mt-4 border p-2">
						<legend class="font-small"><i class="fas fa-tools">&nbsp;Configurações</i></legend>
						<div class="form-group row">
							<div class="col-md-2">
								<label>Fornecedor Ativo</label>
								<select class="custom-select" name="fornecedor_ativo">
									<option value="0">
										Não
									</option>
									<option value="1">
										Sim
									</option>

								</select>

							</div>
							<div class="col-md-8">
								<label>Observações</label>
								<textarea class="form-control form-control-user"
										  name="fornecedor_obs"> <?php echo set_value('fornecedor_obs') ?></textarea>
								<?php echo form_error('fornecedor_obs', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

					</fieldset>

					<div class="form-group row mb-3 mt-4">


						<div class="col-md-4">
							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>

							<a title="Voltar" href="<?php echo base_url($this->router->fetch_class()) ?>"
							   class="btn btn-success btn-sm ml-2">
								Voltar <a/>

						</div>

				</form>
			</div>


		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->