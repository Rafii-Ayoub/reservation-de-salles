<?php   include('databases/databases.php');
$query6="SELECT * from salle ";

$result6=mysqli_query($con,$query6);

$errors=[];
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];
$CNE=$_GET['CNE'];
if(isset($_POST['submit1']))
{
	$salle=$_POST['salle'];
	
	$date=htmlentities(trim($_POST['date']));
	$heured=htmlentities(trim($_POST['heured']));
	$heuref=htmlentities(trim($_POST['heuref']));
	$descreption=htmlentities(trim($_POST['descreption']));





if(empty($date)){
$errors= '<div class="alert alert-danger">Veuillez bien saisir la date</div>' ;
}

elseif(empty($heured)){
	$errors= '<div class="alert alert-danger"> Veuillez saisir l heure debut de reservation</div>' ;
}
elseif(empty($heuref)){
	$errors= '<div class="alert alert-danger">Veuillez saisir l heure fin de reservation</div>' ;
}
else{
	$query5="SELECT * from reserversalleconferance where reservation_date="."'".$date."'"." && reservation_heured="."'".$heured."'"." && nom_salleConferance="."'".$salle."'"."    ";
//die(print_r($query5));
$result5=mysqli_query($con,$query5);

$res=mysqli_num_rows($result5);
if($res==1){
	$errors= '<div class="alert alert-danger">  Cette date est deja reservee, veuillez saisir un autre creneau </div>';
}else{$query3="INSERT INTO reserversalleconferance(CNE,nom_salleConferance,reservation_date,reservation_heured,reservation_heuref,	description) values("."'".$CNE."'".","."'".$salle."'".","."'".$date."'".","."'".$heured."'".","."'".$heuref."'".","."'".$descreption."'"." )           ";
	//die(print_r($query3));
$result3=mysqli_query($con,$query3);
if($result3){$errors=  "La reservation est bien reussite" ;}
else{$errors= '<div class="alert alert-danger">Une erreur s est produite merci de ressayer  </div>';}

}

}
}
if(isset($_POST['submit2'])){
	$date=htmlentities(trim($_POST['date']));
$query4= " SELECT nom_salleConferance,reservation_date,reservation_heured,reservation_heuref,description from reserverSalleConferance where reservation_date >= "."'".$date."'"." && reservation_date <= ADDDATE("."'".$date."'".",7);  ";
//die(print_r($query4));
$result4=mysqli_query($con,$query4);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire Salle</title>
	<link rel="stylesheet" type="text/css" href="styles/styleform.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo.png"/>
</head>
<body>
  <header>
		<div class="logo">
			<img src="images/principal.PNG" width="160px" height="65px" margin-top="10px">
		</div>
		<nav>
			<ul>
				<li><a href="menuneo.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Acceuil</a></li>
				<li><a href="consulter_reservation.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>">Mes réservations</a></li>
				<li><a href="log_in.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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

	<form class="terrain" action="" method="post">



		                 <p> NOM :</p>
		 <input type="text" name="nom_etudiant" id="nom_etudiant"class="input" placeholder="<?php       echo    $nom_etudiant;       ?>"><br>
		                 <p> PRENOM :</p>
		 <input type="text" name="prenom_etudiant" id="prenom_etudiant"  class="input" placeholder="<?php       echo    $prenom_etudiant;       ?>"><br>
		                 <p> CNE :</p>
		 <input type="text" name="CNE" id="CNE" class="input" placeholder="<?php       echo    $CNE;       ?>"><br>

		  <p> DATE :</p>
		 <input type="date" name="date" id="date" placeholder="" class="input"><br>
		 <br>
                         <p> HEURE DEBUT: </p>
         <input type="time" id="heured" name="heured"
            min="8:00" max="18:00"  class="input">
                         <p> HEURE FIN: </p>
         <input type="time" id="heuref" name="heuref"
            min="8:00" max="18:00"  class="input">
                         <p>DESCRIPTION</p>
         <textarea class="textarea" rows="6" cols="50" name="descreption" id="descreption" placeholder=" Donner une description pour votre événement..."></textarea>


        
        <?php   if(!empty($errors)){
		echo $errors;
	} ?>
        <ul>
        	<li><input type="submit" name="submit1" value="Valider" class="buttn"></li>
        	<li><input type="submit" name="submit2" value="Consulter Planning" class="buttn"></li>
        </ul>



        	 <?php if(isset($_POST['submit2'])) : 
        	 /* tableau li 9atlik */?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">SALLE</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE DEBUT</th>
      <th scope="col">HEURE FIN</th>
      <th scope="col">DESCRIPTION</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result4->fetch_assoc()):  ?>
    <tr>
      <th scope="row"> #</th>
      <td><?php echo $row['nom_salleConferance']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heured']  ; ?></td>
       <td><?php echo $row['reservation_heuref']  ; ?></td>
        <td><?php echo $row['description']  ; ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php endif; ?>
	</form>
</body>
</html>