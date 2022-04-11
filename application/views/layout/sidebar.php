<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('home')?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Txile <sup>v 060.1</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('/'); ?>">
			<i class="fas fa-home"></i>
			<span>Principal</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
		   aria-controls="collapseTwo">
			<i class="fas fa-boxes"></i>
			<span>Produtos</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Cadastro</h6>
				<a class="collapse-item" href="<?php echo base_url('marcas'); ?>"><i class=" fas fa-cubes text-gray-900"></i>&nbsp;Marcas</a>
				<a class="collapse-item" href="<?php echo base_url('categorias'); ?>"><i class="fab fa-buffer text-gray-900"></i>&nbsp;Categorias</a>
				<a class="collapse-item" href="<?php echo base_url('produtos'); ?>"><i class="fab fa-product-hunt text-gray-900"></i>Produtos</a>
			</div>
		</div>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuatro" aria-expanded="true"
		   aria-controls="collapseTwo">
			<i class="fa-solid fa-money-bill-1"></i>
			<span>Financeiro</span>
		</a>
		<div id="collapseQuatro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Contas a pagar</h6>
				<a class="collapse-item" href="<?php echo base_url('pagar'); ?>"><i class="fa-solid fa-file-invoice-dollar text-gray-900 "></i>&nbsp;Contas a pagar</a>
			</div>
		</div>
	</li>


	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
		   aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-database"></i>
			<span>Área de cadastros</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Cadastros:</h6>
				<a class="collapse-item" title="Gerenciar clientes" href="<?php echo base_url('clientes'); ?>"><i class=" fas fa-user-tie"></i>&nbsp;Clientes</a>
				<a class="collapse-item" title="Gerenciar fornecedores" href="<?php echo base_url('fornecedores');?>"><i class="fas fa-user-tag text-gray-900 "></i>&nbsp;Fornecedores</a>
				<a class="collapse-item" title="Gerenciar servicos" href="<?php echo base_url('servicos');?>"> <i class="fas fa-user-secret text-gray-900 "></i>&nbsp;Serviços</a>

			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Heading -->
	<div class="sidebar-heading">
		Configurações
	</div>
	<!-- Nav Item - Pages Collapse Menu -->


	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a title="Gerenciar usuários" class="nav-link" href="<?php echo base_url('usuarios'); ?>">
			<i class="fas fa-users"></i>
			<span>Usuários</span></a>
	</li>
	<li class="nav-item">
		<a title="Gerenciar arquivos" class="nav-link" href="<?php echo base_url('arquivos'); ?>">
			<i class="fas fa-adjust"></i>
			<span>Arquivos</span></a>
	</li>
	<li class="nav-item">
		<a title="Gerenciar dados do sistema" class="nav-link" href="<?php echo base_url('sistema'); ?>">
			<i class="fas fa-cogs"></i>
			<span>Sistema</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
