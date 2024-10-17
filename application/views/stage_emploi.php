<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage emploi</title>
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
header {
    background-color: #e7e7e7;
    color: #fff;
    padding: 20px;
    background: linear-gradient(to top, rgb(6, 184, 249) 5%, transparent 5%);
}

nav {
    display: flex;
    align-items: center;
}

nav a {
     margin-right: 30px;
}
      
nav a:hover{
    color: rgb(6, 184, 249);
}

.logo img {
    height: 80px;
    margin-right: 10px;
}

ul {
    display: flex;
    list-style-type: none;
    margin: 20px;
    padding: 0;
    margin-left: 35%;
    font-size: x-large;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     
}

li a {
    color: #000000;
    text-decoration: none;
    padding: 10px;
}
.pere {
    width: 80%;
    margin: 0 auto;
    padding-top: 20px;
}

.champs {
    display: flex;
    justify-content: space-between;
}

.champs div {
    width: 48%;
}
.champs1 {
    display: flex;
    justify-content: space-between;
}

.champs1 div {
    width: 48%;
    margin-left: 150px;
    margin-top: 40px;
}

input[type=name], input[type=email], input[type=text] , input[list=ContratType], input[list=worktime], textarea {
    width: 100%;
    padding: 25px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 20px;
    border: none;
    background-color: #F5F5F5;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 2em;
    
}


.area1 {
    height: 50px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 1.2em;
}

.area2 {
    height: 50px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 1.2em;  
}

input[type=submit] {
    background-color:#079CF0 ;
    color: rgb(255, 255, 255);
    padding: 17px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 13%;
    border-radius: 10px;
    margin-left: 45%;
    margin-top: 7%;
    font-size: 2em;
    transition-duration: 0.4s;
}

input[type=submit]:hover {
    background-color: #000000;
}

footer {
    text-align: center; 
    padding: 1px; 
	height: 300px;
    background: linear-gradient(to top, transparent 99% ,#079CF0 9%);
	width: 100%;
    margin-top: auto;
  }

  html{
	  height: 100%;
  }

  body{
	  min-height: 100%;
	  display: flex;
	  flex-direction: column;
  }

  .logo p img {
    height: 150px;
    width: 250px;
    margin-right: 250px;
    justify-content: start;
    display: flex;
    position: relative;
    top: -170px;
    margin-left: -50px;

  }
  
  .info {
    flex-direction: column;
    display: flex;
    align-items: center;
    margin-top: 20px;
  }
  
  .info p {
    margin: 0; 
    padding: 5px; 
    color: #000000;
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .info a {
    list-style: none;
    text-decoration: none;
    color: #000;
  }
  
  .info p img {
    height: 25px;
    width: 25px;
    margin:0;
    justify-content: center;
  }
  .info h1{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size:2.5em;
}
.radio-group {
  margin-top: 10%;
  margin-left: 10%;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 2.3em;
}
footer {
    text-align: center; 
    padding: 1px; 
	height: 300px;
    background: linear-gradient(to top, transparent 99% ,#079CF0 9%);
	width: 100%;
    margin-top: 200px;
  }
  
  .logo p img {
    height: 150px;
    width: 250px;
    margin-right: 250px;
    justify-content: start;
    display: flex;
    position: relative;
    top: -170px;
    margin-left: -50px;

  }
  
  .info {
    flex-direction: column;
    display: flex;
    align-items: center;
    margin-top: 20px;
  }
  
  .info p {
    margin: 0; 
    padding: 5px; 
    color: #000000;
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .info a {
    list-style: none;
    text-decoration: none;
    color: #000;
  }
  
  .info p img {
    height: 25px;
    width: 25px;
    margin:0;
    justify-content: center;
  }
  .info h1{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size:2.5em;
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
    <div class="pere">
		<h1 style="color:#079CF0; text-align: center; font-size: xxx-large ">STAGE/EMPLOI ajout</h1>
		<br><br>
		<form action="<?php echo site_url('admin/stage_emploi/add/valide') ?>" method="post">
          <div class="champs">
            <div>
              <input type="text" id="name" name="nom" required placeholder="Nom de l'entreprise">
            </div>
    
            <div>
              <input type="text" id="name" name="poste" placeholder="Poste ">
            </div>

        </div>
    
          <div class="champs">
            <div>
                <input list="ContratType" id="contrat" name="ContratType" placeholder="Selectionner le type de contrat">
                <datalist id="ContratType">
                  <option value="CDD"></option>
                  <option value="CDI">CDI</option>
                  <option value="Stage">Stage</option>
                  <option value="Contrat">Contrat</option>
                  </datalist>
            </div>
    
            <div>
                <input list="worktime" name="worktime" id="autre" placeholder="Temps de travaille" >
                <datalist id="worktime">
                  <option value="Temps-plein">Temps-plein</option>
                  <option value="Temps-partiel">Temps-partiel</option>
                  </datalist>
            </div>
          </div>
            <div class="champs">
                <div>
                    <input type="text" id="salary" name="salary" placeholder="Salaire (facultatif)">

                </div>
                
                <div>
                    <input type="text" id="offerDeadline" name="offerDeadline" placeholder="Délai de l'offre">

                </div>
              </div>
              <div class="champs">
                <div class="area1"> <textarea id="message" name="message1" placeholder="Description entreprise"></textarea></div>
                <div class="area2"> <textarea id="message" name="message2" placeholder="Description poste"></textarea></div>
              </div>

          </div>
        <div class="radio-group">
            <label>Mode de réception des candidatures:</label>
            <input type="radio" id="email" name="applicationMode" value="Email">
            <label for="email">Email</label>
            <input type="radio" id="phone" name="applicationMode" value="Téléphone">
            <label for="phone">Téléphone</label> 
        </div>
        <div class="champs1">
            <div>
                <input type="text" id="contact" name="contact" placeholder="Entrez le mail ou numéro de téléphone ici ">
            </div>
        </div>
            <input type="submit" value="PUBLIER">
</form>
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
<script>
	// Sélectionnez l'élément d'entrée
	var promotionInput = document.getElementById("contrat");

	// Écoutez l'événement d'entrée utilisateur
	promotionInput.addEventListener("input", function () {
		// Récupérez la valeur entrée par l'utilisateur
		var userInput = promotionInput.value;

		// Récupérez les options de la liste déroulante
		var datalist = document.getElementById("ContratType");
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

	// Sélectionnez l'élément d'entrée
	var promotionInput2 = document.getElementById("autre");

	// Écoutez l'événement d'entrée utilisateur
	promotionInput2.addEventListener("input", function () {
		// Récupérez la valeur entrée par l'utilisateur
		var userInput1 = promotionInput2.value;

		// Récupérez les options de la liste déroulante
		var datalist1 = document.getElementById("worktime");
		var options2 = datalist1.getElementsByTagName("option");

		// Vérifiez si la valeur entrée correspond à l'une des options de la liste
		var match = false;
		for (var i = 0; i < options2.length; i++) {
			if (options2[i].value === userInput1) {
				match = true;
				break;
			}
		}

		// Si la valeur entrée ne correspond pas à une option, réinitialisez l'entrée
		if (!match) {
			promotionInput2.value = "";
		}
	});
</script>
</body>
</html>
