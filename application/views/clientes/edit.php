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

				<form class="user" method="POST" name="form_edit">

					<p><strong><i class="fas fa-clock">&nbsp;Última alteração: </i></strong>&nbsp;<?php echo formata_data_banco_com_hora( $cliente->cliente_data_alteracao);?></p>

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados Pessoais</legend>
						<div class="form-group row">

							<div class="col-md-5">

								<label>Nome</label>
								<input type="text" class="form-control form-control-user" name="cliente_nome"
									   placeholder="Seu Nome"
									   value="<?php echo $cliente->cliente_nome ?>">
								<?php echo form_error('cliente_nome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-5 ">

								<label>Sobrenome</label>
								<input type="text" class="form-control form-control-user" name="cliente_sobrenome"
									   placeholder="Sobrenome do cliente"
									   value="<?php echo $cliente->cliente_sobrenome ?>">
								<?php echo form_error('cliente_sobrenome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>Data de nascimento</label>
								<input type="date" class="form-control form-control-user-date "
									   name="cliente_data_nascimento"
									   placeholder=""
									   value="<?php echo $cliente->cliente_data_nascimento ?>">
								<?php echo form_error('cliente_data_nascimento', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

						<div class="form-group row">

							<div class="col-md-4 ">
								<?php if ($cliente->cliente_tipo == 1): ;?>
									<label>Rg</label>
								<?php else:?>
									<label>Inscrição estadual</label>
								<?php endif;?>
								<label>RG /I.E</label>
								<input type="text" class="form-control form-control-user" name="cliente_rg_ie"
									   placeholder="<?php echo ($cliente->cliente_tipo == 1 ? 'Rg do cliente' : 'I.E do cliente');?>"
									   value="<?php echo $cliente->cliente_rg_ie ?>">
								<?php echo form_error('cliente_rg_ie', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4 ">
								<?php if ($cliente->cliente_tipo == 1): ;?>
								<label>Cpf</label>
									<input type="text" class="form-control form-control-user cpf" name="cliente_cpf"
										   placeholder="Cpf ou Cnpj do cliente"
										   value="<?php echo $cliente->cliente_cpf_cnpj ?>">
									<?php echo form_error('cliente_cpf', ' <small class="form-text text-danger">', '</small>'); ?>

								<?php else:?>
								<label>CNPJ</label>
									<input type="text" class="form-control form-control-user cnpj" name="cliente_cnpj"
										   placeholder="Cpf ou Cnpj do cliente"
										   value="<?php echo $cliente->cliente_cpf_cnpj ?>">
									<?php echo form_error('cliente_cnpj', ' <small class="form-text text-danger">', '</small>'); ?>

								<?php endif;?>

							</div>
							<div class="col-md-4">
								<label>Email</label>
								<input type="text" class="form-control form-control-user  " name="cliente_email"
									   placeholder=""
									   value="<?php echo $cliente->cliente_email ?>">
								<?php echo form_error('cliente_email', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-group row">

							<div class="col-md-3">
								<label>Telefone fixo</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="cliente_telefone" placeholder="Telefone fixo"
									   value="<?php echo $cliente->cliente_telefone ?>">
								<?php echo form_error('cliente_telefone', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-3">

								<label>Telefone celular</label>
								<input type="text" class="form-control form-control-user phone_whith_add"
									   name="cliente_celular" placeholder="Telefone celular"
									   value="<?php echo $cliente->cliente_celular ?>">
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
									   value="<?php echo $cliente->cliente_endereco ?>">
								<?php echo form_error('cliente_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Número</label>
								<input type="text" class="form-control form-control-user"
									   name="cliente_numero_endereco"
									   placeholder="Numero endereco"
									   value="<?php echo $cliente->cliente_numero_endereco ?>">
								<?php echo form_error('cliente_endereco_endereco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Complemento</label>
								<input type="text" class="form-control form-control-user " name="cliente_complemento"
									   placeholder="Complemento"
									   value="<?php echo $cliente->cliente_complemento ?>">
								<?php echo form_error('cliente_complemento', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>
						<div class="form-group row mb-3">

							<div class="col-md-4">

								<label>Bairro</label>
								<input type="text" class="form-control form-control-user" name="cliente_bairro"
									   placeholder="Bairro"
									   value="<?php echo $cliente->cliente_bairro ?>">
								<?php echo form_error('cliente_bairro', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>Cep</label>
								<input type="text" class="form-control form-control-user cep " name="cliente_cep"
									   placeholder="Cep"
									   value="<?php echo $cliente->cliente_cep ?>">
								<?php echo form_error('cliente_cep', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4">
								<label>Cidade</label>
								<input type="text" class="form-control form-control-user  " name="cliente_cidade"
									   placeholder="cidade"
									   value="<?php echo $cliente->cliente_cidade ?>">
								<?php echo form_error('cliente_cidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-2">
								<label>UF</label>
								<input type="text" class="form-control form-control-user uf" name="cliente_estado"
									   placeholder="estado"
									   value="<?php echo $cliente->cliente_estado ?>">
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
									<option value="0" <?php echo($cliente->cliente_ativo == 0 ? 'selected' : ''); ?>>
										Não
									</option>
									<option value="1" <?php echo($cliente->cliente_ativo == 1 ? 'selected' : ''); ?>>
										Sim
									</option>

								</select>

							</div>
							<div class="col-md-8">
								<label>Observações</label>
								<textarea class="form-control form-control-user"
										  name="cliente_obs"> <?php echo $cliente->cliente_obs ?></textarea>
								<?php echo form_error('cliente_obs', ' <small class="form-text text-danger">', '</small>'); ?>
							</div>

						</div>

					</fieldset>

					<div class="form-group row mb-3 mt-4">
					<input type="hidden" name="cliente_tipo" value="<?php echo $cliente->cliente_tipo ?>">
					<input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id ?>">




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
