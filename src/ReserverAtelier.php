<?php   include('databases/databases.php');
$query6="SELECT * from atelier ";

$result6=mysqli_query($con,$query6);

$errors=[];
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];
$CNE=$_GET['CNE'];
if(isset($_POST['submit1']))
{
	$atelier=$_POST['atelier'];
	$dure=$_POST['dure'];
	$date=htmlentities(trim($_POST['date']));
	$heure=htmlentities(trim($_POST['heure']));





if(empty($date)){
$errors= '<div class="alert alert-danger"> Veuillez bien saisir la date </div>' ;
}

elseif(empty($heure)){
	$errors= '<div class="alert alert-danger"> Veuillez bien saisir l heure de reservation </div>' ;
}
elseif(empty($dure)){
	$errors= '<div class="alert alert-danger">Veuillez bien saisir la duree de votre reservation </div>' ;
}
else{
	$query5="SELECT * from reservation_atelier where reservation_date="."'".$date."'"." && reservation_heure="."'".$heure."'"." && nom_atelier="."'".$atelier."'"."    ";
//die(print_r($query5));
$result5=mysqli_query($con,$query5);

$res=mysqli_num_rows($result5);
if($res==1){
	$errors= '<div class="alert alert-danger"> Cette date est deja reservee, veuillez saisir un autre creneau</div>';
}else{$query3="INSERT INTO reservation_atelier (CNE,reservation_date,reservation_heure,nom_atelier,dure) values("."'".$CNE."'".","."'".$date."'".","."'".$heure."'".","."'".$atelier."'".",  "."'".$dure."'"." )           ";
	//die(print_r($query3));
$result3=mysqli_query($con,$query3);
if($result3){$errors=  "La reservation est bien reussite" ;}
else{$errors= '<div class="alert alert-danger"> Une erreur s est produite merci de ressayer  </div>';}

}

}
}
if(isset($_POST['submit2'])){
	$date=htmlentities(trim($_POST['date']));
$query4= " SELECT nom_atelier,reservation_date,reservation_heure,dure from reservation_atelier where reservation_date >= "."'".$date."'"." && reservation_date <= ADDDATE("."'".$date."'".",7);  ";
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
			<img src="images/ENSAMIEN.png" width="160px" height="65px" margin-top="10px">
		</div>
		<nav>
			<ul>
				<li><a href="menuneo.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Acceuil</a></li>
				<li><a href="consulter_reservation.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>">Mes réservations</a></li>
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

	<form class="terrain" action="" method="post">



		                 <p> NOM :</p>
		 <input type="text" name="nom_etudiant" id="nom_etudiant"class="input" placeholder="<?php       echo    $nom_etudiant;       ?>"><br>
		                 <p> PRENOM :</p>
		 <input type="text" name="prenom_etudiant" id="prenom_etudiant"  class="input" placeholder="<?php       echo    $prenom_etudiant;       ?>"><br>
		                 <p> CNE :</p>
		 <input type="text" name="CNE" id="CNE" class="input" placeholder="<?php       echo    $CNE;       ?>"><br>
		                 <p> SALLE :</p>
		 <select class="input" style="color: black" name="atelier" id="atelier">
          <?php    while($row=$result6->fetch_assoc()):  ?>
  <option class="dropdown-item" value="<?php echo $row['id_salle']  ; ?>"><?php echo $row['id_salle']  ; ?></option>
  <?php endwhile; ?>
</select>


		  <p> DATE :</p>
		 <input type="date" name="date" id="date" placeholder="" class="input"><br>
		 <br>
         <p> HEURE: </p>
         <input type="time" id="heure" name="heure"
            min="8:00" max="18:00"  class="input">


        <p> DUREE :</p>
		<label class="radio"> 1h
		  <input type="radio" name="dure" value="1" checked="checked"/><span class="checkmark"></span>
		</label>
		<label class="radio"> 2h
          <input type="radio" name="dure" value="2"/><span class="checkmark"></span>
        </label>
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
      <th scope="col">ATELIER</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
    </tr>
  </thead>
  <tbody> <?php    while($row=$result4->fetch_assoc()):  ?>
    <tr>
      <th scope="row"> #</th>
      <td><?php echo $row['nom_atelier']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php endif; ?>
	</form>
</body>
</html>