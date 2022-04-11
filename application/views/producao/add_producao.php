

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('producao'); ?>">produção</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>



		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">

				<a title="Voltar" href="<?php echo base_url('producao') ?>" class="btn btn-success btn-sm float-right" ><li class="fas fa-arrow-left">&nbsp;Voltar</li></a>

			</div>
			<div class="card-body">

				<form method="POST" name="form_add">

					<div class="form-group row">

						<div class="col-md-4">

							<label>Número Lote</label>
							<input type="text" class="form-control" name="producao_lote" placeholder="Número do lote" value="<?php echo set_value('producao_lote') ?>">
							<?php echo form_error('producao_lote', ' <small class="form-text text-danger">', '</small>'); ?>

						</div>
						<div class="col-md-2">
							<label>Data de Inicial</label>
							<input type="date" class="form-control form-control-user-date "
								   name="producao_data_inicial"
								   placeholder=""
								   value="<?php echo set_value('producao_data_inicial')?>">
							<?php echo form_error('producao_data_inicial', ' <small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="col-md-2">
							<label>Data de entrega</label>
							<input type="date" class="form-control form-control-user-date "
								   name="producao_data_entrega"
								   placeholder=""
								   value="<?php echo set_value('producao_data_entrega')?>">
							<?php echo form_error('producao_data_entrega', ' <small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="col-md-4">

							<label>Quantidade</label>
							<input type="text" class="form-control" name="producao_qntd" placeholder="Quantidade" value="<?php echo set_value('producao_qntd') ?>">
							<?php echo form_error('producao_qntd', ' <small class="form-text text-danger">', '</small>'); ?>

						</div>
					</div>
					<div class=" form-group row">
						<div class="col-md-4">

							<label>Preço unitário</label>
							<input type="text" class="form-control" name="producao_preco_unitario" placeholder="preço unitário" value="<?php echo set_value('producao_preco_unitario') ?>">
							<?php echo form_error('producao_preco_unitario', ' <small class="form-text text-danger">', '</small>'); ?>

						</div>
						<div class="col-md-4">

							<label >Em produção</label>
							<select class="form-control" name="active">
								<option value="1">Sim</option>
								<option value="0">Não</option>

							</select>

						</div>
						<div class="col-md-4">

							<label >Confecção atuando</label>
							<select class="form-control" name="perfil_usuario">
								<option value="3" >Operador</option>
								<option value="2" >Vendedor</option>
								<option value="1" >Administrador</option>

							</select>

						</div>

					</div>

					<div class=" form-group row">

					</div>
					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			</div>
			</form>
		</div>


	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
