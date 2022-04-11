<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('vendedores') ?>">vendedores</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">

					<?php if (isset($vendedor)): ?>
						<p><strong><i class="fas fa-clock">&nbsp;Última
									alteração: </i></strong>&nbsp;<?php echo formata_data_banco_com_hora($vendedor->vendedor_data_alteracao); ?>
						</p>
					<?php endif; ?>
					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados do vendedor</legend>
						<div class="form-group row">


							<div class="col-md-4 ">

								<label>Nome completo</label>
								<input type="text" class="form-control form-control-user"
									   name="vendedor_nome_completo"
									   placeholder="Nome completo"
									   value="<?php echo set_value('vendedor_nome_completo') ?>">
								<?php echo form_error('vendedor_nome_completo', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3">
								<label>CPF</label>
								<input type="input" class="form-control form-control-user cpf "
									   name="vendedor_cpf"
									   placeholder="CPF"
									   value="<?php echo set_value('vendedor_cpf') ?>">
								<?php echo form_error('vendedor_cpf', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="col-md-4 ">
								<label>R.G</label>

								<input type="text" class="form-control form-control-user" name="vendedor_rg"
									   placeholder="Identidade"
									   value="<?php echo set_value('vendedor_rg') ?>">
								<?php echo form_error('vendedor_rg', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

						</div>

						<div class="form-group row">


							<div class="col-md-4 ">

								<label>Telefone fixo</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="vendedor_telefone"
									   placeholder="Telefone Fixo"
									   value="<?php echo set_value('vendedor_telefone') ?>">
								<?php echo form_error('vendedor_telefone', ' <small class="form-text text-danger">', '</small>'); ?>


							</div>
							<div class="col-md-4">
								<label>Email</label>
								<input type="text" class="form-control form-control-user  " name="vendedor_email"
									   placeholder="Email"
									   value="<?php echo set_value('vendedor_email') ?>">
								<?php echo form_error('vendedor_email', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="col-md-3">

								<label>Telefone celular</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="vendedor_celular" placeholder="Telefone celular"
									   value="<?php echo set_value('vendedor_celular') ?>">
								<?php echo form_error('vendedor_celular', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>

						<div class="form-group row">


						</div>

					</fieldset>
					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class=""><i class="fas fa-map-marker-alt"></i></i>&nbsp;Dados de
							Endereço
						</legend>

						<div class="form-group row mb-3">

							<div class="col-md-4">
								<label>Endereço</label>
								<input type="text" class="form-control form-control-user" name="vendedor_endereco"
									   placeholder="Endereço do fornnecedor"
									   value="<?php echo set_value('vendedor_endereco') ?>">
								<?php echo form_error('vendedor_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Número</label>
								<input type="text" class="form-control form-control-user"
									   name="vendedor_numero_endereco"
									   placeholder="Numero endereco"
									   value="<?php echo set_value('vendedor_numero_endereco') ?>">
								<?php echo form_error('vendedor_numero_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Complemento</label>
								<input type="text" class="form-control form-control-user " name="vendedor_complemento"
									   placeholder="Complemento"
									   value="<?php echo set_value('vendedor_complemento') ?>">
								<?php echo form_error('vendedor_complemento', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
						<div class="form-group row mb-3">

							<div class="col-md-4">

								<label>Bairro</label>
								<input type="text" class="form-control form-control-user" name="vendedor_bairro"
									   placeholder="Bairro"
									   value="<?php echo set_value('vendedor_bairro') ?>">
								<?php echo form_error('vendedor_bairro', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>Cep</label>
								<input type="text" class="form-control form-control-user cep " name="vendedor_cep"
									   placeholder="Cep"
									   value="<?php echo set_value('vendedor_cep') ?>">
								<?php echo form_error('vendedor_cep', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Cidade</label>
								<input type="text" class="form-control form-control-user  " name="vendedor_cidade"
									   placeholder="cidade"
									   value="<?php echo set_value('vendedor_cidade') ?>">
								<?php echo form_error('vendedor_cidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>UF</label>
								<input type="text" class="form-control form-control-user uf" name="vendedor_estado"
									   placeholder="Estado"
									   value="<?php echo set_value('vendedor_estado') ?>">
								<?php echo form_error('vendedor_estado', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
					</fieldset>

					<fieldset class="mt-4 border p-2">
						<legend class="font-small"><i class="fas fa-tools">&nbsp;Configurações</i></legend>
						<div class="form-group row">
							<div class="col-md-2">
								<label>vendedor Ativo</label>
								<select class="custom-select" name="vendedor_ativo">
									<option value="0">
										Não
									</option>
									<option value="1">
										Sim
									</option>
								</select>

							</div>
							<div class="col-md-2">
								<label>Vendedor matricula</label>
								<input type="text" class="form-control form-control-user " name="vendedor_codigo"
									   placeholder="Vendedor Matricula"
									   value="<?php echo $vendedor_codigo ?>">
							</div>

							<div class="col-md-8">
								<label>Observações</label>
								<textarea class="form-control form-control-user"
										  name="vendedor_obs"> <?php echo set_value('vendedor_obs') ?></textarea>
								<?php echo form_error('vendedor_obs', ' <small class="form-text text-danger">', '</small>'); ?>
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
