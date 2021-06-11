<?php  $CNE=$_GET['CNE'] ;
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];       ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styleneo.css">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="images/principal.PNG"/>
</head>
<body>
	<header>
		<div class="logo">
			<img src="images/principal.PNG" width="300px" height="170px">
		</div>
		<nav>
			<ul>
				<li ><a style="color: black" href="menuneo.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Acceuil</a></li>
				<li ><a style="color: black" href="consulter_reservation.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>">Mes réservations</a></li>
				<li ><a style="color: black" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
		<div class="toggle_menu">
			<i class="fas fa-bars" area-hidden="true"></i>
		</div>
	</header>
	<div style="padding: 200px" class="acceuil">
		    <p style="font-weight: bold" class=bienvenu>Chers ENSAMIEN cher prof, profiter de ce site pour reserver avec un seul clic</p>
        <div class="container">
            <div class="choix">
                <div class="icon"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
                <div class="content">
                    <h3>Sport</h3>
                    <p>Relaxez vous, pratiquez vos loisirs dans votre terrain de sport.</p><br>
                    <a href="reserver_basket.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Terrain de Basket ball</div></a><br>                 
                    <a href="reserver_volleyball.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Terrain de Volleyball</div></a>
                </div>
            </div>
             <div class="choix">
                <div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                <div class="content">
                    <h3>Pratique</h3>
                    <p>Pensez &aacute; r&eacute;server un atelier pour pr&eacute;senter vos m&eacute;thodes de travail ou r&eacute;aliser votre projet.</p><br>
                    <a href="reserverSalleTP.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Salle de Traveau Pratique</div></a><br>                 
                    <a href="reserverAtelier.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Atelier</div></a>
                </div>
            </div>
             <div class="choix">
                <div class="icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                <div class="content">
                    <h3>Lecture</h3>
                    <p>Planifiez les cours de formations, de r&eacute;unions, r&eacute;servez la salle de conf&eacute;rence, consultez le planning et r&eacute;servez en ligne. </p><br>
                    <a style="color: white" href="ReserverSalle.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Salle/Amphi</div></a><br>                 
                    <a style="color: white" href="ReserverSalleConference.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>"><div class="lien">Salle de Conferance</div></a>
                </div>
            </div>
        </div>

    </div>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle_menu').click(function(){
				$('nav').toggleClass('active')
			})
		})
	</script>


</body>
</html>