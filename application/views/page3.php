<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/page3.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
</head>
<body>
    <header>
		<nav>
			<div class="logo">
				<img src="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
			</div>
			<ul>
				<li><a class="fixe" href="<?php echo site_url('presentation') ?>">Présentation de la Twin</a></li>
				<li><a  href="<?php echo site_url('deboucher') ?>">Débouchés</a></li>
				<li><a style="color: rgb(6, 184, 249);" href="<?php echo site_url('contact') ?>">Contacts</a></li>
				<li><a href="<?php echo site_url('profile') ?>">Profil</a></li>
			</ul>
		</nav>
	</header>
    <h1>CONTACTS</h1>
    <div class="pere">
        <form action="<?php echo site_url('plus_info') ?>" method="post">
          <div class="champs">
            <div>
              <input type="text" id="name" name="name" required placeholder="Nom et prenom">
            </div>
    
            <div>
              <input type="tel" id="phone" name="phone" required placeholder="Telephone">
            </div>
          </div>
    
          <div class="champs">
            <div>
              <input type="email" id="email" name="email" required placeholder="Email">
            </div>
    
            <div>
             
              <input type="text" id="subject" name="subject" required placeholder="Objet">
            </div>
          </div>
          <textarea id="message" name="message" required placeholder="Message"></textarea>
            <input type="submit" value="Envoyer" placeholder="Envoyer">
        </form> 
      </div>
	<footer>

		<div class="info">

			<h1><strong>INFORMATIONS</strong></h1>
		</div>


		<div class="lieu">
			<p>Bd. de Marseille face à Bernabé - 4 Km <br> Treichville - 18 BP 1501 Abidjan 18 Abidjan</p>
			<img src="<?php echo base_url('assets/img/localisateur-removebg-preview (1).png') ?>"" alt="">
		</div>

		<div class="aze"> <img src="<?php echo base_url('assets/img/logo_TWIN.png') ?>" alt=""></div>

		<div class="numero">
			<p> +2252721218100</p>
			<img src="<?php echo base_url('assets/img/appel__1_-removebg-preview.png') ?>" alt="">
		</div>


		<div class="maila">
			<p>info@esatic.ci</p>
			<img src="<?php echo base_url('assets/img/courrier-removebg-preview.png') ?>" alt="">
		</div>
	</footer>
</body>
</html>
