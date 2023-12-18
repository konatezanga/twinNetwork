<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>offres de stages</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/page9.css') ?>">
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
	<div class="postule-job">
		<h1>OFFRES DE STAGES / EMPLOIS STAGES</h1>
		<?php if (isset($stages)){
			foreach ($stages as $stage):
				?>
				<h2>STAGES</h2>
				<hr>
				<h3><?php echo $stage['nom_entreprise'] ?> </h3>
				<p> <?php echo $stage['description_poste'] ?> </p>
				<p>Les réceptions de candidatures se font sur le mail/numero suivant: <?php echo $stage['mail_entreprise'] ?></p>
			<?php endforeach;
		} ?>

		<?php if (isset($emplois)){
			foreach ($emplois as $emploi):
				?>
				<h2>EMPLOIS</h2>
				<hr>
				<h3><?php echo $emploi['nom_entreprise'] ?> </h3>
				<p><?php echo $emploi['description_poste'] ?></p>
				<p>Les réceptions de candidatures se font sur le mail/telephone suivant: <?php echo $emploi['mail_entreprise'] ?> avec comme dossier de candidature</p>
			<?php endforeach;
		} ?>
	</div>
</div>
<a href="<?php echo site_url('profile') ?>" class="button">Retour à mon profil</a>
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
