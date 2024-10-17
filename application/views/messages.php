<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/message.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
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
				<img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
			</div>
			<ul>
				<li><a href="<?php echo site_url('admin/user') ?>">UTILISATEURS</a></li>
				<li><a href="<?php echo site_url('admin/stage_emploi') ?>">STAGES/EMPLOIS</a></li>
				<li><a href="<?php echo site_url('admin/page_twinbook')?>">TWINBOOK</a></li>
				<li><a href="<?php echo site_url('admin/contact') ?>">CONTACTS</a></li>
			</ul>
		</nav>
	</header>
	<div class="contact">
		<ol>
			<link rel="stylesheet" href="<?php echo site_url('admin/contact') ?>">
		</ol>
	</div>
    <div class="text">
		<?php foreach ($messages as $message): ?>
		<div class="message"> <h1>MESSAGES</h1></div>
   <div class="nom"> <P><strong><?php echo $message['nom'] ?></strong></P><br></div>
    
	<div class="para"><p><?php echo $message['message'] ?></p><br></div>
    
		<button type="submit">
			<a style="text-decoration: none; color: black" href="mailto:<?php echo $message['email'] ?>"><strong>REPONDRE PAR MAIL </strong></a>
		</button>
		<?php endforeach; ?>
</div>
	<footer>

		<div class="info">

			<h1><strong>INFORMATIONS</strong></h1>
		</div>


		<div class="lieu">
			<p>Bd. de Marseille face à Bernabé - 4 Km <br> Treichville - 18 BP 1501 Abidjan 18 Abidjan</p>
			<img style="margin-left: 37%" src="<?php echo base_url('assets/img/localisation.jpg') ?>" alt="">
		</div>

		<div class="aze"> <img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>" alt=""></div>

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
