<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('marcas') ?>">marcas</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_edit">

					<p><strong><i class="fas fa-clock">&nbsp;Última
								alteração: </i></strong>&nbsp;<?php echo formata_data_banco_com_hora($marca->marca_data_alteracao); ?>
					</p>

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados da marca</legend>
						<div class="form-group row">

							<div class="col-md-8">

								<label>Nome da marca </label>
								<input type="text" class="form-control form-control-user" name="marca_nome"
									   placeholder="Nome da marca"
									   value="<?php echo $marca->marca_nome ?>">
								<?php echo form_error('marca_nome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

							<div class="col-md-2">
								<label>Marca Ativo</label>
								<select class="custom-select" name="marca_ativa">
									<option value="0" <?php echo($marca->marca_ativa == 0 ? 'selected' : ''); ?>>
										Não
									</option>
									<option value="1" <?php echo($marca->marca_ativa == 1 ? 'selected' : ''); ?>>
										Sim
									</option>

								</select>

							</div>


						</div>


					</fieldset>


					<div class="form-group row mb-3 mt-4">

						<input type="hidden" name="marca_id" value="<?php echo $marca->marca_id ?>">


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
