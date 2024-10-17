<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/page6.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
</head>
<body>
    <header>
		<nav>
			<div class="logo">
				<img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
			</div>
			<ul>
				<li><a class="fixe" href="<?php echo site_url('presentation') ?>">Présentation Twin</a></li>
				<li><a href="<?php echo site_url('deboucher') ?>">Débouchés</a></li>
				<li><a href="<?php echo site_url('contact') ?>">Contacts</a></li>
				<li><a style="color: rgb(6, 184, 249);" href="<?php echo site_url('profile') ?>">Profil</a></li>
			</ul>
		</nav>
	</header>
   
  <h1>PROFIL</h1>

  <div class="form-container">
    <div>
      <h2 class="inscrip">INSCRIPTION</h2>
<P>Inscrivez vous pour faire partie 
  <br>
  la grande famille de TWIN</P>
  <br>
      <form action="<?php echo site_url('inscription') ?>" id="formulaire" method="post">
        <input type="text" id="name" name="nom" required placeholder="Nom et Prénoms">
        <input list="promotion" name="promotion" id="promotionInput" required placeholder="Promotion">
        <datalist id="promotion">
          <option value="IT5">IT5</option>
          <option value="IT6">IT6</option>
          <option value="IT7">IT7</option>
          <option value="IT8">IT8</option>
          <option value="IT9">IT9</option>
          <option value="IT10">IT10</option>
          <option value="IT11">IT11</option>
          <option value="IT12">IT12</option>
          <option value="IT13">IT13</option>
        </datalist>
		  <?php if(isset($matricule_connu)){ foreach ($matricule_connu as $erreur0): ?>
			  <p style="color: red;"><?php echo $erreur0; ?></p>
		  <?php endforeach; } ?>
        <input type="text" id="matricule" name="matricule" required placeholder="Numéro de Matricule">

        <input type="email" id="email" name="email" required placeholder="Email">

        <input  type="password" id="pwd" name="pwd" required placeholder="Mot de passe" >
        <img src="<?php echo base_url('assets/img/oeil-removebg-preview.png')?>" id="eyeclose" onclick="montre()">
        <img src="<?php echo base_url('assets/img/oeil visible.png') ?>" id="eye" alt="vu" onclick="caché()">
        <script>
          function montre() {
              var x = document.getElementById("pwd");
              if (x.type === "password") {
                  x.type = "text";
                  document.getElementById('eye').style.display='block'
                  document.getElementById('eyeclose').style.display='none'

              }
          }
          function caché() {
              var x = document.getElementById("pwd");
              if (x.type === "text") {
                  x.type = "password";
                  document.getElementById('eye').style.display='none'
                  document.getElementById('eyeclose').style.display='block'

              }
          }

		  // Sélectionnez l'élément d'entrée
		  var promotionInput = document.getElementById("promotionInput");

		  // Écoutez l'événement d'entrée utilisateur
		  promotionInput.addEventListener("input", function () {
			  // Récupérez la valeur entrée par l'utilisateur
			  var userInput = promotionInput.value;

			  // Récupérez les options de la liste déroulante
			  var datalist = document.getElementById("promotion");
			  var options = datalist.getElementsByTagName("option");

			  // Vérifiez si la valeur entrée correspond à l'une des options de la liste
			  var match = false;
			  for (var i = 0; i < options.length; i++) {
				  if (options[i].value === userInput) {
					  match = true;
					  break;
				  }
			  }

			  // Si la valeur entrée ne correspond pas à une option, réinitialisez l'entrée
			  if (!match) {
				  promotionInput.value = "";
			  }
		  });

          </script>

        <div class="gender">
          <p>Sexe:</p><input type="radio" required id="male" name="gender" value="male">
          <label for="male">M</label><br>
          <input type="radio" id="female" required name="gender" value="female">
          <label for="female">F</label><br>
        </div>
        <input type="submit" value="JE M'INSCRIS">
      </form> 
    </div>
    <hr>
   <div>
    <h2 class="connex">CONNEXION</h2>
    <P>Vous êtes déjà membre de la grande famille TWIN,
      <br>alors conectez vous ici</P>
      <br>
    <form action="<?php echo site_url('connexion') ?>" method="post">
      <input type="text" id="matricule" name="matricule" required placeholder="Matricule">
		<?php if(isset($erreur_matricule)){  ?>
			<p style="color: red;"><?php echo $erreur_matricule ?></p>
		<?php  } ?>
      <input type="email" id="email" name="email" required placeholder="Email">
		<?php if(isset($erreur_email)){  ?>
			<p style="color: red;"><?php echo $erreur_email; ?></p>
		<?php  } ?>
      <input  type="password" id="pwd2" name="pwd2" required placeholder="Mot de passe" >
		<?php if(isset($erreur_passe)){    ?>
			<p style="color: red;"><?php echo $erreur_passe; ?></p>
		<?php } ?>
        <img src="<?php echo base_url('assets/img/oeil-removebg-preview.png')?>" id="eyeclose2" onclick="montrer()">
        <img src="<?php echo base_url('assets/img/oeil visible.png') ?>" id="eye2" alt="vu" onclick="cacher()">
        <script>
          function montrer(){
              var x = document.getElementById("pwd2");
              if (x.type === "password") {
                  x.type = "text";
                  document.getElementById('eye2').style.display='block'
                  document.getElementById('eyeclose2').style.display='none'
              }
          }
          function cacher() {
              var x = document.getElementById("pwd2");
              if (x.type === "text") {
                  x.type = "password";
                  document.getElementById('eye2').style.display='none'
                  document.getElementById('eyeclose2').style.display='block'
              }
          }
          </script>
      <input type="submit" value="JE ME CONNECTE">
    </form> 
  </div>
</div>
	<footer>

		<div class="info">

			<h1><strong>INFORMATIONS</strong></h1>
		</div>


		<div class="lieu">
			<p>Bd. de Marseille face à Bernabé - 4 Km <br> Treichville - 18 BP 1501 Abidjan 18 Abidjan</p>
			<img src="<?php echo base_url('assets/img/localisateur-removebg-preview (1).png') ?>" alt="">
		</div>

		<div class="aze"> <img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>" alt=""></div>

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
