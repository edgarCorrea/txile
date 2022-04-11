<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content" xmlns="http://www.w3.org/1999/html">

	<?php $this->load->view('layout/navbar'); ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('servicos') ?>">Serviços</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
			</ol>
		</nav>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">

			<div class="card-body">

				<form class="user" method="POST" name="form_add">

					<fieldset class="mt-4 border pr-2">
						<legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados do serviço</legend>
						<div class="form-group row">

							<div class="col-md-5">

								<label>Titulo do Serviço </label>
								<input type="text" class="form-control form-control-user" name="servico_nome"
									   placeholder="Título do serviço"
									   value="<?php echo set_value('servico_nome'); ?>">
								<?php echo form_error('servico_nome', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>
							<div class="col-md-5 ">

								<label>Nome preco</label>
								<input type="text" class="form-control form-control-user money"
									   name="servico_preco"
									   placeholder="preço"
									   value="<?php echo  set_value('servico_preco'); ?>">
								<?php echo form_error('servico_preco', ' <small class="form-text text-danger">', '</small>'); ?>

							</div>

							<div class="col-md-2">
								<label>servico Ativo</label>
								<select class="custom-select" name="servico_ativo">
									<option value="0" >	Não</option>
									<option value="1" >Sim</option>

								</select>

							</div>


						</div>
						<div class="form-group row">

							<div class="col-md-12">
								<label>Descrição do Serviço</label>
								<textarea class="form-control form-control-user"
										  name="servico_descricao" style="min-height: 100px!important"> <?php echo set_value('servico_descricao'); ?></textarea>
								<?php echo form_error('servico_descricao', ' <small class="form-text text-danger">', '</small>'); ?>
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
