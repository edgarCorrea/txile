<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('pagar') ?>">Contas a pagar</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_edit">

					<p><strong><i class="fas fa-clock">&nbsp;Última
								alteração: </i></strong>&nbsp;<?php echo formata_data_banco_com_hora($conta_pagar->conta_pagar_data_alteracao); ?>
					</p>

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fab fa-money-bill-alt"></i>&nbsp;Dados da conta</legend>
						<div class="form-group row">

						</div>
						<div class="form-group row">
							<div class="col-md-3 MB-3">
								<label>Fornecedor</label>
								<select class="custom-select contas_pagar" name="conta_pagar_fornecedor_id">
									<?php foreach ($fornecedores as $fornecedor) : ?>
										<option value="<?php echo $fornecedor->fornecedor_id ?>" <?php echo($fornecedor->fornecedor_id == $conta_pagar->conta_pagar_fornecedor_id ? 'selected' : '') ?><?php echo($fornecedor->fornecedor_ativo == 0 ? 'disabled style="color: #EF4A4A"' : '') ?>><?php echo $fornecedor->fornecedor_nome_fantasia ?></option>
									<?php endforeach ?>
								</select>
								<?php echo form_error('conta_pagar_fornecedor_id', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-4 MB-3">
								<label>Data de vencimento</label>
								<input type="date" class="form-control form-control-user-date "
									   name="conta_pagar_data_vencimento"

									   value="<?php echo $conta_pagar->conta_pagar_data_vencimento ?>">
								<?php echo form_error('conta_pagar_unidade', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
						</div>

					</fieldset>


					<div class="form-group row mb-3 mt-4">

						<input type="hidden" name="conta_pagar_id" value="<?php echo $conta_pagar->conta_pagar_id ?>">


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
