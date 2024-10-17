<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/page1.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
</head>
<body>
    <header>
		<nav>
			<div class="logo">
				<img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
			</div>
			<ul>
				<li class="fixe"><a href="<?php echo site_url('presentation') ?>">Présentation Twin</a></li>
				<li><a href="<?php echo site_url('deboucher') ?>">Débouchés</a></li>
				<li><a href="<?php echo site_url('contact') ?>">Contacts</a></li>
				<li><a href="<?php echo site_url('profile') ?>">Profil</a></li>
			</ul>
		</nav>
	</header>
    <div class="square">
        <img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>" alt="Votre image">
        <div class="text" style="color:black;">TECHNOLOGIES DU WEB ET IMAGES NUMERIQUES</div>
      </div>
      <div class="text1"><h2>BIENVENUE SUR TWIN NETWORKS,</h2>
    <h2>Le plus grands reseau de tout les étudiants et anciens etudiants de TWIN</h2></div>
      <br>
      <div class="text2"><h3>WELCOME TO TWIN NETWORK,</h3>
        <h3>The largest network of all TWIN students and alumni</h3>
      </div>
      <div class="image"><img src="<?php echo base_url('assets/img/Photo esatic.jpg') ?>" alt=""width="1379"></div>
      <div class="container">
		<div class="section">
			<h2>00</h2>
			<p>Etudiants de la ville depuis sa creation</p>
		</div>
		
		<div class="section">
			<h2>00</h2>
			<p>Promotions</p>
		</div>

        <div class="section">
            <h2>00</h2>
            <p>Mobilities</p>
        </div>

        <div class="section">
            <h2>00</h2>
            <p>Mentions Très Bien</p>
        </div>

    </div>
    <div class="square1">
      <p class="text3">PARTENAIRES</p>
    </div>
    <footer>
      <div class="info">
          <h1>INFORMATIONS</h1>
          <p><img src="<?php echo base_url('assets/img/localisateur-removebg-preview (1).png') ?>" alt="">Abidjan, Treichville, Bd de Marseille</p>
          <p><img  class="img" src="<?php echo base_url('assets/img/appel__1_-removebg-preview.png') ?>" alt="" >+225 05 75 92 9035</p>
          <p><a href="mailto:info@esatic.ci"><img class="img" src="<?php echo base_url('assets/img/courrier-removebg-preview.png') ?>" alt="" >infoesatic@mail.ci</a></p>
      </div>
<div class="logo">
<p><img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>" alt="Votre logo"></p>
</div>
  </footer>
</body>
</html>
