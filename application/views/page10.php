<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWIN BOOK</title>
   <link rel="stylesheet" href="<?php echo base_url('assets/css/page10.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li><a href="<?php echo site_url('profile') ?>">Profil</a></li>
			</ul>
		</nav>
	</header>
   
<body>
    <div class="container1">
        <div class="header1">
            <h1>TWINBOOK</h1>
            <p>Un outil pour les étudiants pour accéder aux matériaux
                <br> de cours et aux corrections</p>
                <div class="search-container">
                    <i class="fa fa-search search-icon"></i>
                    <input type="search" class="search-input" placeholder="Rechercher...">
                </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <h1>Licence 1</h1>
			<?php if (isset($programmes)){
				foreach($programmes as $programme): ?>
            <div class="tabs">
                <div class="tab">COURS
                    <hr>
					<a href="<?php echo base_url('programme/'.$programme['cours']) ?>" download="<?php echo $programme['cours'] ?>" ><?php echo $programme['cours'] ?></a>
				</div>
               
                <div class="tab">EXERCICES
                    <hr>
					<a href="<?php echo base_url('programme/'.$programme['exercices']) ?>" download="<?php echo $programme['exercices'] ?>" ><?php echo $programme['exercices'] ?></a>
                </div>
               
                <div class="tab">CORRECTIONS
                    <hr>
					<a href="<?php echo base_url('programme/'.$programme['corrections']) ?>" download="<?php echo $programme['corrections'] ?>"><?php echo $programme['corrections'] ?></a>
                </div>
            </div>
			<?php endforeach;
			}else{ ?>
				<h2 style="text-align: center">Indisponible</h2>
			<?php } ?>
        </div>
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
