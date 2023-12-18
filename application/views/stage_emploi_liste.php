<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>offres stages </title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/page8.css')?>">
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
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
<div class="pere">
	<h1>OFFRES DE STAGES / EMPLOIS</h1>
	<div class="offers">
		<div class="internships">

			<h2>STAGES</h2>
			<hr class="trait">
			<ol>
				<?php if(isset($stages)){
					foreach ($stages as $stage):
						?>
						<li><a href="<?php echo site_url('admin/stage/'.$stage['id'])?>"><?php echo $stage['nom_entreprise'].', '.$stage['poste'] ?></a></li>
					<?php endforeach; } ?>
			</ol>
		</div>
		<hr>
		<div class="jobs">
			<h2>EMPLOIS</h2>
			<hr class="trait">
			<ol>
				<?php if(isset($emplois)){
					foreach ($emplois as $emploi):
						?>
						<li><a href="<?php echo site_url('admin/emploi/'.$emploi['id'])?>"><?php echo $emploi['nom_entreprise'].', '.$emploi['poste'] ?></a></li>
					<?php endforeach; } ?>
			</ol>
		</div>
	</div>
	<a href="<?php echo site_url('admin/stage_emploi/add') ?>" class="button">AJOUTER </a>
</div>
<footer>
	<div class="info">
		<h1>INFORMATIONS</h1>
		<p><img src="<?php echo base_url('assets/img/localisateur-removebg-preview (1).png') ?>" alt="">Abidjan, Treichville, Bd de Marseille</p>
		<p><img  class="img" src="<?php echo base_url('assets/img/appel__1_-removebg-preview.png') ?>" alt="" >+225 05 75 92 9035</p>
		<p><a href="mailto:info@esatic.ci"><img class="img" src="<?php echo base_url('assets/img/courrier-removebg-preview.png') ?>" alt="" >infoesatic@mail.ci</a></p>
	</div>
	<div class="logo">
		<p><img src="<?php echo base_url('assets/img/logo_TWIN.png') ?>" alt="Votre logo"></p>
	</div>
</footer>
</body>
</html>
