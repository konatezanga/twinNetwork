<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception de mail</title>
	<link rel="icon" href="<?php echo base_url('assets/img/logo_TWIN.png') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
		*
{
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
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
h1{
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 4em;
    margin-top: 50px;
    color: black;
}

.section {
    background-color: #fff;
    padding: 40px;
    margin-bottom: 20px;
}

hr{
	background-color: #079CF0;
	width: 50%;
	margin-left: 70px;
	height: 7px;
	border-radius: 50px;
    border: none;

}
.header1 {
    text-align: center;
    padding: 20px;
}
p{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 1.5em;
    text-align: center;
	color:bl*;
}
footer {
    text-align: center; 
    padding: 20px; 
	height: 300px;
    background: linear-gradient(to top, transparent 99% ,#079CF0 9%);
	width: 100%;
    margin-top: 300px;
  }
  
  .logo p img {
    height: 150px;
    width: 250px;
    margin-right: 250px;
    justify-content: start;
    display: flex;
    position: relative;
    top: -280px;
    margin-left: -40px;


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
		.imd{
		height:30%;
		width:30%;
			margin-left:34%;
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
	<div class="container1">
        <div class="header1">
            <h1>OFFRES DE STAGES/EMPLOIS</h1>
		</div>

		<div class="header2">
			<img class="imd" src="<?php echo  base_url('assets/img/recu.jpg') ?>">
			<P>Votre offre de stages/emplois a été publié</P>
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
