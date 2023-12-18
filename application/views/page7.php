<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/page7.css') ?>">
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
				<li><a href="<?php echo site_url('deboucher') ?>">Débouchés</a></li>
				<li><a href="<?php echo site_url('contact') ?>">Contacts</a></li>
				<li><a style="color: rgb(6, 184, 249);" href="<?php echo site_url('profile') ?>">Profil</a></li>
			</ul>
		</nav>
	</header>
	<?php foreach($utilisateur as $user):  ?>
    <div class="profile">
		<form id="profile-form" action="<?php echo site_url('photo') ?>" method="post" enctype="multipart/form-data">
			<label for="profile-pic">
				<img id="profile-pic-preview" src="<?php echo (!empty($user['photo'])) ? base_url('photo/'.$user['photo']) : base_url('assets/img/Profil.png') ?>" alt="Profile Picture" style="width: 150px; height: 150px; border-radius: 40px;">
				<input type="file" id="profile-pic" name="photo" accept="jpeg, jpg, png" style="display: none;" onchange="previewProfilePic(event); uploadForm();">
				<input type="hidden" value="<?php echo $user['id'] ?>" name="identifiant">
			</label>
			<p>M. <?php echo $user['nom']; ?></p>
			<h6> <a href="mailto:<?php echo $user['email']; ?>" style="color: black; text-decoration: none"><?php echo $user['email']; ?></a>
				<br>
				<?php echo $user['promotion']; ?>
			</h6>
		</form>

	</div>
      <div class="options">
        <a href="https://chat.whatsapp.com/Bj3j5RYp6TtBBwp5UaC1XG" class="option">
          <img src="<?php echo base_url('assets/img/whatsapp-removebg-preview.png') ?>" alt="Icône WhatsApp">
          <p>Discutez instantanément sur notre groupe WhatsApp</p>
        </a>
        <a href="<?php echo site_url('twinbook') ?>" class="option">
          <img src="<?php echo base_url('assets/img/signet.png') ?>" alt="Icône de signet">
          <p>Parcourir la TWINBOOK(cours, exercices et corrections)</p>
        </a>
        <a href="<?php echo site_url('stage_emploi') ?>" class="option">
          <img src="<?php echo base_url('assets/img/cartable.png') ?>" alt="Icône de malette">
          <p>Découvrir les offres de stages/emplois</p>
        </a>
      </div>
	<?php endforeach; ?>
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
      <script src="<?php echo base_url('assets/js/page7.js') ?>"></script>
      
</body>
</html>
