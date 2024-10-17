<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWIN BOOK</title>
   <link rel="stylesheet" href="page10.css">
	<link rel="icon" href="<?php echo base_url('assets/img/MonLogo.PNG') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/styles.css')?> " rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
    color: #079CF0;
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
  .info h1{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size:2.5em;
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

	<div class="card mb-4">
		<div class="card-header">
			<i class="fas fa-table me-1"></i>
			Utilisateur inscrit
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
				<tr>
					<th>Nom</th>
					<th>Promotion</th>
					<th>Matricule</th>
					<th>Email</th>
					<th>Genre</th>
					<th>Action</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Nom</th>
					<th>Promotion</th>
					<th>Matricule</th>
					<th>Email</th>
					<th>Genre</th>
					<th>Action</th>
				</tr>
				</tfoot>
				<tbody>
				<?php foreach ($utilisateurs as $user): ?>
				<tr>
					<td><?php echo $user['nom'] ?></td>
					<td><?php echo $user['promotion'] ?></td>
					<td><?php echo $user['matricule'] ?></td>
					<td><?php echo $user['email'] ?></td>
					<td><?php echo $user['genre'] ?></td>
					<td>
						<a href="<?php echo site_url('admin/delete/'.$user['id']) ?>" style="text-decoration: none; color: red;">delete</a>

						<?php if ($user['statut'] == 'inactive'){ ?>

						<a href="<?php echo site_url('admin/accepte/'.$user['id']) ?>" style="text-decoration: none; color: forestgreen;">accepte</a>

						<?php } ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
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
			<p><img src="<?php echo base_url('assets/img/MonLogo.PNG') ?>" alt="Votre logo"></p>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/js/datatables-simple-demo.js') ?>"></script>
</body>
</html>
