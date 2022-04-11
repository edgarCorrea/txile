<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('clientes') ?>">Clientes</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">

					<div class="custom-control custom-radio custom-control-inline mt-2">
						<input type="radio" id="pessoa_fisica" name="cliente_tipo" class="custom-control-input"
							   value="1" <?php echo set_checkbox('cliente_tipo', '1') ?> checked="">
						<label class="custom-control-label pt-1" for="pessoa_fisica">Pessoa física</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="pessoa_juridica" name="cliente_tipo" class="custom-control-input"
							   value="2" <?php echo set_checkbox('cliente_tipo', '2') ?> >
						<label class="custom-control-label pt-1" for="pessoa_juridica">Pessoa jurídica</label>
					</div>


					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados Pessoais</legend>
						<div class="form-group row">

							<div class="col-md-5">

								<label>Nome</label>
								<input type="text" class="form-control form-control-user" name="cliente_nome"
									   placeholder="Seu Nome"
									   value="<?php echo set_value('cliente_nome') ?>">
								<?php echo form_error('cliente_nome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-5 ">
								<label>Sobrenome</label>
								<input type="text" class="form-control form-control-user" name="cliente_sobrenome"
									   placeholder="Sobrenome do cliente"
									   value="<?php echo set_value('cliente_sobrenome') ?>">
								<?php echo form_error('cliente_sobrenome', ' <small class="form-text text-danger">', '</small>'); ?>


							</div>
							<div class="col-md-2">
								<label>Data de nascimento</label>
								<input type="date" class="form-control form-control-user-date "
									   name="cliente_data_nascimento"
									   placeholder=""
									   value="<?php echo set_value('cliente_data_nascimento') ?>">
								<?php echo form_error('cliente_data_nascimento', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

						<div class="form-group row">
							<div class="col-md-3 ">
								<div class="pessoa_fisica">
									<label>Cpf</label>
									<input type="text" class="form-control form-control-user cpf" name="cliente_cpf"
										   placeholder="Cpf do cliente"
										   value="<?php echo set_value('cliente_cpf') ?>">
									<?php echo form_error('cliente_cpf', ' <small class="form-text text-danger">', '</small>'); ?>

								</div>
								<div class="pessoa_juridica">
									<label>Cnpj</label>
									<input type="text" class="form-control form-control-user cnpj" name="cliente_cnpj"
										   placeholder="Cnpj do cliente"
										   value="<?php echo set_value('cliente_cnpj') ?>">
									<?php echo form_error('cliente_cnpj', ' <small class="form-text text-danger">', '</small>'); ?>

								</div>
							</div>
							<div class="col-md-3">
								<label class="pessoa_fisica">Rg</label>
								<label class="pessoa_juridica">Inscrição estadual</label>
								<input type="text" class="form-control form-control-user" name="cliente_rg_ie"
									   placeholder=""
									   value="<?php echo set_value('cliente_rg_ie') ?>">
								<?php echo form_error('cliente_rg_ie', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="col-md-6 ">
								<label>Email</label>
								<input type="text" class="form-control form-control-user  " name="cliente_email"
									   placeholder=""
									   value="<?php echo set_value('cliente_email') ?>">
								<?php echo form_error('cliente_email', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

						</div>
						<div class="form-group row">

							<div class="col-md-3">
								<label>Telefone fixo</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="cliente_telefone" placeholder="Telefone fixo"
									   value="<?php echo set_value('cliente_telefone') ?>">
								<?php echo form_error('cliente_telefone', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3">

								<label>Telefone celular</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="cliente_celular" placeholder="Telefone celular"
									   value="<?php echo set_value('cliente_celular') ?>">
								<?php echo form_error('cliente_celular', ' <small class="form-text text-danger">', '</small>'); ?>

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
								<input type="text" class="form-control form-control-user" name="cliente_endereco"
									   placeholder="Endereço do cliente"
									   value="<?php echo set_value('cliente_endereco') ?>">
								<?php echo form_error('cliente_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Número</label>
								<input type="text" class="form-control form-control-user"
									   name="cliente_numero_endereco"
									   placeholder="Numero endereco"
									   value="<?php echo set_value('cliente_numero_endereco') ?>">
								<?php echo form_error('cliente_endereco_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Complemento</label>
								<input type="text" class="form-control form-control-user " name="cliente_complemento"
									   placeholder="Complemento"
									   value="<?php echo set_value('cliente_complemento') ?>">
								<?php echo form_error('cliente_complemento', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
						<div class="form-group row mb-3">

							<div class="col-md-4">

								<label>Bairro</label>
								<input type="text" class="form-control form-control-user" name="cliente_bairro"
									   placeholder="Bairro"
									   value="<?php echo set_value('cliente_bairro') ?>">
								<?php echo form_error('cliente_bairro', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>Cep</label>
								<input type="text" class="form-control form-control-user cep " name="cliente_cep"
									   placeholder="Cep"
									   value="<?php echo set_value('cliente_cep') ?>">
								<?php echo form_error('cliente_cep', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Cidade</label>
								<input type="text" class="form-control form-control-user  " name="cliente_cidade"
									   placeholder="cidade"
									   value="<?php echo set_value('cliente_cidade') ?>">
								<?php echo form_error('cliente_cidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>UF</label>
								<input type="text" class="form-control form-control-user uf" name="cliente_estado"
									   placeholder="estado"
									   value="<?php echo set_value('cliente_estado') ?>">
								<?php echo form_error('cliente_estado', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
					</fieldset>

					<fieldset class="mt-4 border p-2">
						<legend class="font-small"><i class="fas fa-tools">&nbsp;Configuarações</i></legend>
						<div class="form-group row">
							<div class="col-md-2">
								<label>Cliente Ativo</label>
								<select class="custom-select" name="cliente_ativo">
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
										  name="cliente_obs"> <?php echo set_value('cliente_obs') ?></textarea>
								<?php echo form_error('cliente_obs', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

					</fieldset>

					<div class="col-md-4">
						<button type="submit" class="btn btn-primary btn-sm">Salvar</button>

						<a title="Voltar" href="<?php echo base_url('clientes') ?>"
						   class="btn btn-success btn-sm ml-2">
							Voltar <a/>

					</div>

				</form>
			</div>


		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
