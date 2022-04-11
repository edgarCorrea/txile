

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <a title="Voltar" href="<?php echo base_url('usuarios') ?>" class="btn btn-success btn-sm float-right" ><li class="fas fa-arrow-left">&nbsp;Voltar</li></a>

            </div>
            <div class="card-body">

                <form method="POST" name="form_add">

                    <div class="form-group row">

                        <div class="col-md-4">

                            <label>Nome</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Seu Nome" value="<?php echo set_value('first_name') ?>">
                            <?php echo form_error('first_name', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>
                        <div class="col-md-4">

                            <label>Sobrenome</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Seu Sobrenome" value="<?php echo set_value('last_name') ?>">
                            <?php echo form_error('last_name', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>
                        <div class="col-md-4">

                            <label>Email&nbsp;(login)</label>
                            <input type="email" class="form-control" name="email" placeholder="Seu Email" value="<?php echo set_value('email') ?>">
                            <?php echo form_error('email', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-md-4">

                            <label>Usuário</label>
                            <input type="text" class="form-control" name="username" placeholder="Seu usuário" value="<?php echo set_value('username') ?>">
                            <?php echo form_error('username', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>
                        <div class="col-md-4">

                            <label >Ativo</label>
                            <select class="form-control" name="active">                               
                                <option value="1">Sim</option>
                                <option value="0">Não</option>

                            </select>                       

                        </div>
                        <div class="col-md-4">

                            <label >Perfil de acesso</label>
                            <select class="form-control" name="perfil_usuario">
                                <option value="3" >Operador</option>
                                <option value="2" >Vendedor</option>
                                <option value="1" >Administrador</option>

                            </select>

                        </div>

                    </div>

                    <div class=" form-group row">
                        <div class="col-md-4">

                            <label>Empresa</label>
                            <input type="text" class="form-control" name="company" placeholder="Nome da empresa" value="<?php echo set_value('company') ?>">
                            <?php echo form_error('company', ' <small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-4">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Sua senha" >
                            <?php echo form_error('password', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>
                        <div class="col-md-4">

                            <label>Confirma senha</label>
                            <input type="password" class="form-control" name="confirm_senha" placeholder="Confirme Sua senha" >
                            <?php echo form_error('confirm_senha', ' <small class="form-text text-danger">', '</small>'); ?>

                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->