<?php  
$CNE=$_GET['CNE'] ;
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];  
 include('databases/databases.php');    








 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles/styleform.css">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png"/>
</head>
<body>
	
		
<header>
        <div class="logo">
            <img src="images/principal.PNG" width="170px" height="65px">
        </div>
		<nav>
			<ul>
				<li><a href="menuneoadmin.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Acceuil</a></li>
			
				<li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

</header>






<div class="acceuil">
        <div class="container">
            <div class="choix">
                <div class="icon"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
                <div class="content">
                    <h3></h3>
                    <p></p><br>
                    <a href="consulter_atelier.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Terrain de Basket ball</div></a><br>                 
                    
                </div>
            </div>
             <div class="choix">
                <div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                <div class="content">
                    <h3>Pratique</h3>
                    <p>  </p><br>
                    <a href="consulter_salletp.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Salle de Traveau Pratique</div></a><br>                 
                    
                </div>
            </div>
             <div class="choix">
                <div class="icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                <div class="content">
                    <h3>lecture</h3>
                    <p> </p><br>
                    <a href="consulter_salleconferance.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Salle/Amphi</div></a><br>                 
                   
                </div>
            </div>
        </div>
        <p class=bienvenu> Bienvenue sur votre application de gestion de reservation des salles  </p>
    </div>



























	



</body>
</html>