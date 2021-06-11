




<!DOCTYPE html>
<?php       include('databases/databases.php'); $CNE=$_GET['CNE'] ;
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant']; 

$query1= " SELECT nom_salletp,reservation_date,reservation_heure,dure,etat from reservation_salletp where CNE= "."'".$CNE."'"."             ";
//die(print_r($query4));
$result1=mysqli_query($con,$query1);


$query2= " SELECT num_reservation,nom_salle,reservation_date,reservation_heure,dure from reservation_salle where CNE= "."'".$CNE."'"."             ";
//die(print_r($query2));
$result2=mysqli_query($con,$query2);

$query3= " SELECT num_reservation,nom_atelier,reservation_date,reservation_heure,dure,etat from reservation_atelier where CNE= "."'".$CNE."'"."             ";
//die(print_r($query2));
$result3=mysqli_query($con,$query3);

$query4= " SELECT num_reservation,nom_salle,reservation_date,reservation_heure,dure from reservation_salle where CNE= "."'".$CNE."'"."             ";
//die(print_r($query2));
$result4=mysqli_query($con,$query4);

$query5= " SELECT num_reservation,nom_salleConferance,reservation_date,reservation_heured,reservation_heuref,description,etat from reserversalleconferance where CNE= "."'".$CNE."'"."             ";
//die(print_r($query2));
$result5=mysqli_query($con,$query5);

$query6= " SELECT num_reservation,nom_t,reservation_date,reservation_heure,dure from reservation_t where CNE= "."'".$CNE."'"."             ";
//die(print_r($query2));
$result6=mysqli_query($con,$query6);
    ?>
<html>
<head>
	<title>CONSULTER VOS RESERVATION</title>
	<link rel="stylesheet" type="text/css" href="styles/styleform.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo.png"/>
  <style type="text/css">
        table{
  width: 1020px;
  margin: auto;
  text-align: center;
  table-layout: fixed;
  border:6px;
}
table tr, th, td{
  padding: 30px;
  padding-right: 55px;
  padding-left: 0px;
  color: white;
  border:1px solid #080808;
  border-collapse: collapse;
  font-size: 13.5px;
  font-family: arial;
  background:linear-gradient(top, #3c3c3c 0%, #222222 100%);
  background:-webkit-linear-gradient(top, #3c3c3c 0%,#222222 100%);
}
th,td
{
  opacity: 1;
  padding-right: 80px;
}
td: hover{
    background: red;
    transition: all 0.5s ease-in;
 
  </style>
</head>
<body>
  <header>
		<div class="logo">
			<img src="images/ENSAMIEN.png" width="160px" height="65px" margin-top="10px">
		</div>
		<nav>
			<ul>
				<li><a href="menuneo.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>">Acceuil</a></li>
				<li><a href="consulter_reservation.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Mes réservations</a></li>
				<li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
		<div class="toggle_menu">
			<i class="fas fa-bars" area-hidden="true"></i>
		</div>
	</header>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle_menu').click(function(){
				$('nav').toggleClass('active')
			})
		})
	</script>

		<form class="terrain" >

<h2> MES RESERVATION DE TERRAINS </h2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col"> Code de Reservation</th>
      <th scope="col">TERRAIN</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
      <th scope="col">Imprimer fiche</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result6->fetch_assoc()):  ?>
    <tr>
      <th scope="row"><?php echo $row['num_reservation']  ;?></th>
      <td><?php echo $row['nom_t']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
      <td><a href="fiche.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>&reservation_date=<?php echo $row['reservation_date']?>&reservation_heure=<?php echo $row['reservation_heure']  ; ?>&dure=<?php echo $row['dure']  ; ?>&objet=<?php echo $row['nom_t']  ; ?>">fiche</a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<h2>MES RESERVATION DE SALLE </h2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col"> Code de Reservation</th>
      <th scope="col">SALLE</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
      <th scope="col">Imprimer fiche</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result2->fetch_assoc()):  ?>
    <tr>
      <th scope="row"><?php echo $row['num_reservation']  ;?></th>
      <td><?php echo $row['nom_salle']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
      <td><a href="fiche.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>&reservation_date=<?php echo $row['reservation_date']?>&reservation_heure=<?php echo $row['reservation_heure']  ; ?>&dure=<?php echo $row['dure']  ; ?>&objet=<?php echo $row['nom_salle']  ; ?>">fiche</a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<h2> MES RESERVATION DE SALLE DE TP</h2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Code de Reservation</th>
      <th scope="col">SALLEtp</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
       <th scope="col">ETAT</th>
       <th scope="col">Imprimer fiche</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result1->fetch_assoc()):  ?>
    <tr>
      <th scope="row"><?php echo $row['num_reservation']  ;?></th>
      <td><?php echo $row['nom_salletp']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
      <td><?php echo $row['etat']  ; ?></td>
      <?php  if($row['etat']=='confirmer')  : ?>
      <td><a href="fiche.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>&reservation_date=<?php echo $row['reservation_date']?>&reservation_heure=<?php echo $row['reservation_heure']  ; ?>&dure=<?php echo $row['dure']  ; ?>&objet=<?php echo $row['nom_salletp']  ; ?>">fiche</a></td>
         <?php endif;if($row['etat']!=='confirmer') :   ?>
         <td>FICHE</td>
         <?php endif;   ?>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<h2> MES RESERVATION D'ATELIER </h2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col"> Code de Reservation</th>
      <th scope="col">ATELIER</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
      <th scope="col">ETAT</th>
       <th scope="col">Imprimer fichier</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result3->fetch_assoc()):  ?>
    <tr>
      <th scope="row"><?php echo $row['num_reservation']  ;?></th>
      <td><?php echo $row['nom_atelier']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
      <td><?php echo $row['etat']  ; ?></td>
      <?php  if($row['etat']=='confirmer')  : ?>
      <td><a href="fiche.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>&reservation_date=<?php echo $row['reservation_date']?>&reservation_heure=<?php echo $row['reservation_heure']  ; ?>&dure=<?php echo $row['dure']  ; ?>&objet=<?php echo $row['nom_atelier']  ; ?>">fiche</a></td>
         <?php endif;if($row['etat']!=='confirmer') :   ?>
         <td>FICHE</td>
         <?php endif;   ?>
    </tr>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<h2>MES RESERVATION DE SALLE DE CONFERANCE </h2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col"> Code de Reservation</th>
      <th scope="col">SALLE DE CONFERANCE</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE DE DEBUT</th>
      <th scope="col">HEURE DE FIN</th>
      <th scope="col">ETAT</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">imprimer fiche</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result5->fetch_assoc()):  ?>
    <tr>
      <th scope="row"><?php echo $row['num_reservation']  ;?></th>
      <td><?php echo $row['nom_salleConferance']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heured']  ; ?></td>
      <td><?php echo $row['reservation_heuref']  ; ?></td>
      <td><?php echo $row['etat']  ; ?></td>
      <td><?php echo $row['description']  ; ?></td>
      <?php  if($row['etat']=='confirmer')  : ?>
      <td><a href="fichefonferance.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>&reservation_date=<?php echo $row['reservation_date']?>&reservation_heured=<?php echo $row['reservation_heured']  ; ?>&reservation_heuref=<?php echo $row['reservation_heuref']  ; ?>&objet=SALLE DE CONFIRANCE">fiche</a></td>
         <?php endif;if($row['etat']!=='confirmer') :   ?>
         <td>FICHE</td>
         <?php endif;   ?>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>



</form>













</body>
</html>