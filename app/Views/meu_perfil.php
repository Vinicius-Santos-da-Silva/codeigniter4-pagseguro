<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meu Perfil</title>
	<?php echo view('header_style'); ?>

	<script src="<?=site_url('assets/js/pagina.perfil.js')?>"></script>

</head>
<body>

	<?php echo view('navbar'); ?>

    <?php echo view('usuario/perfil'); ?>

	<?php echo view('header_script'); ?>

</body>
</html>
