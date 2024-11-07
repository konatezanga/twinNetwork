<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
    <style>*{
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
        margin-left: 39%;
        font-size: x-large;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         
    }
    
    li a {
        color: #000000;
        text-decoration: none;
        padding: 10px;
    }
    h1{
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin-top: 40px;
        font-size: 3em;
        
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
    
    input[type=name], input[type=email] , input[type=password] {
        width: 80%;
        padding: 25px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 20px;
        border: none;
        background-color: #F5F5F5;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 2em;
        margin-top: 50px;
        text-align: center;
        margin-left: 60px;
    }
    #eyeclose {
  float:right;
  margin-right:12%;
  margin-top:-43px;
  position:relative;
  z-index:2;
  height: 20px;
}
#eye {
  display: none;
  float:right;
  margin-right:12%;
  margin-top:-43px;
  position:relative;
  z-index:2;
  height: 20px;
}
#eyeclose2 {
  float:right;
  margin-right:12%;
  margin-top:-43px;
  position:relative;
  z-index:2;
  height: 20px;
}
#eye2 {
  display: none;
  float:right;
  margin-right:12%;
  margin-top:-43px;
  position:relative;
  z-index:2;
  height: 20px;
}

#password-field {
    position:relative;
}
    h4{
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 1.2em;
        margin-top: 20px;
    }
    input[type=submit] {
        background-color: rgb(6, 184, 249);
        color: rgb(255, 255, 255);
        padding: 15px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20%;
        border-radius: 20px;
        font-size: 1.2em;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        transition-duration: 0.4s;
    margin-left: 40%;
    margin-top: 10%;
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
}</style>
</head>
<body>
    <header>
		<nav>
			<div class="logo">
				<img src="<?php echo base_url('assets/img/MonLogo.PNG')?>">
			</div>
		</nav>
	</header>
    <h1>CONNEXION</h1>
    <div class="pere">
        <form action="<?php echo site_url('admin/verifier') ?>" method="post">
          <div class="champs">
				<input type="email" id="email" name="email" required placeholder="Email">
				<?php if(isset($erreur_mail)){  ?>
					<p style="color: red;"><?php echo $erreur_mail; ?></p>
				<?php  } ?>
			  <input  type="password" id="pwd" name="password"  required placeholder="Mot de passe" >
				<?php if(isset($erreur_passe)){  ?>
					<p style="color: red;"><?php echo $erreur_passe ?></p>
				<?php  } ?>
        </div>
			<input type="submit" value="SE CONNECTER">
    </div>
</form>
    <h4>Seuls les administrateurs du réseau auront accès à
        <br>
        ce site pour apporter des modifications</h4>


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
