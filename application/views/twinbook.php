<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWINBOOK</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/twinbook.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
	<style>
		html{
			height: 100%;
		}
		body{
			min-height: 100%;
			flex-direction: column;
			display: flex;
		}
	</style>
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<img src="<?php echo base_url('assets/img/logo.jpg') ?>">
			</div>
			<ul>
				<li><a href="<?php echo site_url('admin/user') ?>">UTILISATEURS</a></li>
				<li><a href="<?php echo site_url('admin/stage_emploi') ?>">STAGES/EMPLOIS</a></li>
				<li><a href="<?php echo site_url('admin/page_twinbook')?>">TWINBOOK</a></li>
				<li><a href="<?php echo site_url('admin/contact') ?>">CONTACTS</a></li>
			</ul>
		</nav>
	</header>
    <div class="book"> <h1><strong>TWINBOOK</strong></h1></div>


    <div class="bout">
    
    <button onclick="window.location.href='<?php echo site_url('admin/twinbook/liste') ?>';"><strong> <p><strong>RENOMMER</strong><br>OU <br>SUPPRIMER</p></strong></button>
    </div>

    <div class="bout1">

        <button onclick="window.location.href = '<?php echo site_url('admin/page_twinbook/add_twinbook')?>';"><strong> <p><strong>AJOUTER</strong></p></strong></button>

    </div>
	<footer>

		<div class="info">

			<h1><strong>INFORMATIONS</strong></h1>
		</div>


		<div class="lieu">
			<p>Bd. de Marseille face à Bernabé - 4 Km <br> Treichville - 18 BP 1501 Abidjan 18 Abidjan</p>
			<img style="margin-left: 37%" src="<?php echo base_url('assets/img/localisation.jpg') ?>" alt="">
		</div>

		<div class="aze"> <img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt=""></div>

		<div class="numero">
			<p> +2252721218100</p>
			<img style="margin-left: 44%"   src="<?php echo base_url('assets/img/appel__1_-removebg-preview.png') ?>" alt="">
		</div>


		<div class="maila">
			<p>info@esatic.ci</p>
			<img style="margin-left: 44%"  src="<?php echo base_url('assets/img/mail.jpg') ?>" alt="">
		</div>
	</footer>
</body>
</html>
