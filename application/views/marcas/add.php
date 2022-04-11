<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('marcas') ?>">Marcas</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados da marca</legend>
						<div class="form-group row">

							<div class="col-md-5">

								<label>Nome da Marca </label>
								<input type="text" class="form-control form-control-user" name="marca_nome"
									   placeholder="Nome da marca"
									   value="<?php echo set_value('marca_nome'); ?>">
								<?php echo form_error('marca_nome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

							<div class="col-md-2">
								<label>Marca Ativa</label>
								<select class="custom-select" name="marca_ativa">
									<option value="0">Não</option>
									<option value="1">Sim</option>
								</select>
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
