<!DOCTYPE html>
<html lang="pt">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php echo(isset($titulo) ? '<title>Gerenciamento Txile ' . $titulo . '</title>' : '<title>Sistema de Gereniamento para confecção</title>'); ?>


	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"
		  type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		  rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('public/css/app.css') ?>">
	<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=&v=weekly&channel=2"
			async
	></script>

	<?php if (isset($styles)): ?>

		<?php foreach ($styles as $style): ?>

			<link href="<?php echo base_url('public/' . $style); ?>" rel="stylesheet">

		<?php endforeach; ?>

	<?php endif; ?>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
