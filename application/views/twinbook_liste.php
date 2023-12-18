<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWIN BOOK</title>
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    background: linear-gradient(to top, #079CF0 5%, transparent 5%);
    
}

.fixe{
	margin-top: -2%;
	margin-left: 1%;
	width: 300px;
	display: inline-block;
}

html{
	height: 100%;
}

body{
	min-height: 100%;
	display: flex;
	flex-direction: column;
}
nav {
	display: flex;
	align-items: center;
}

nav a {
     margin-right: 30px;
}
      
nav a:hover{
    color: #079CF0;
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
    margin-left: 34.5%;
    font-size: x-large;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     
}
li a {
	color: #000000;
	text-decoration: none;
	padding: 10px;
}
html{
	height: 100%;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
	min-height: 100%;
	display: flex;
	flex-direction: column;
}
h1{
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 4em;
    margin-top: 50px;
    color: #079CF0;
}
.container {
    width: 80%;
    margin: 0 auto;
}
.section {
    background-color: #fff;
    padding: 40px;
    margin-bottom: 20px;
}
.tabs {
    display: flex;
    justify-content: space-between;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 2em;
    margin-top: 60px;
}
.tab {
	flex: 1;
    text-align: center;
    padding: 60px;
    border: none;
}
hr{
	background-color: #079CF0;
	width: 50%;
	margin-left: 70px;
	height: 7px;
	border-radius: 50px;
    border: none;

}
.container1 {
    width: 80%;
    margin: 0 auto;
}
.header1 {
    text-align: center;
    padding: 20px;
}
p{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 1.5em;
    text-align: center;
}
.search-container {
    position: relative;
    display: inline-block;
    text-align: center;
    width: 51%;
    margin-top: 30px;
}
.search-icon {
    position: absolute;
    left: 10px;
    top: 15px;
}
.search-input {
    padding-left: 30px; 
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    border: none;
    background-color: #f5f5f5;
    font-size: 1.5em;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    width: 100%;
}
footer {
    text-align: center; 
    padding: 1px; 
	height: 300px;
    background: linear-gradient(to top, transparent 99% ,#079CF0 9%);
	width: 100%;
    margin-top: auto;
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
    margin-top: 18px;
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
    justify-content:center; 
	 }
  .info h1 {
	  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	  font-size: 2.5em;
  }
		  
		  .maila img{
			width: 26px;
		  height: 26px;
		  display: flex;
		  justify-content: center;
		  position:relative;
		  margin-left: 42%;
		  margin-top: -1.2%;
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
    <div id="cont" class="container">
        <div class="section">
            <h1>Licence 1</h1>
			<?php if (isset($books)){
			foreach($books as $programme): ?>
            <div class="tabs">
                <div  class="tab">COURS
                    <hr>
					<a onclick="essaie(<?php echo ($programme['id'])  ?>, 'cours')" >
						<p style="font-size:x-large ;" data-id="<?php echo $programme['id'] ?>" data-nom="<?php echo $programme['cours'] ?>"><?php echo $programme['cours'] ?></p>
					</a>
				</div>

                <div  class="tab">EXERCICES
                    <hr>
					<a onclick="essaie(<?php echo $programme['id'] ?>, 'exercices')" >
						<p style="font-size:x-large ;" data-id="<?php echo $programme['id'] ?>" data-nom="<?php echo $programme['exercices'] ?>"><?php echo $programme['exercices'] ?></p>
					</a>
                </div>
				<div  class="tab">CORRECTIONS
                    <hr>
					<a onclick="essaie(<?php echo $programme['id'] ?>, 'corrections')" >
						<p style="font-size:x-large ;" data-id="<?php echo $programme['id'] ?>" data-nom="<?php echo $programme['corrections'] ?>"><?php echo $programme['corrections'] ?></p>
					</a>
                </div>
            </div>
				<script type="text/javascript">
					function essaie(id, nom){
						lien = "<?php echo site_url('admin/page_twinbook/supprimer/') ?>"+id+"/"+nom;
						Swal.fire({
							icon: 'warning',
							title: 'Suppression',
							text: 'Voulez vous vraiment supprimer le cours "'+nom+'"? ',
							footer: '<a href="'+lien+'">OUI</a>'
						})
					}
				</script>
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

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
