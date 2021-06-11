<?php  
$CNE=$_GET['CNE'] ;
$nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];  
 include('databases/databases.php');    

$query1= " SELECT nom_salletp,reservation_date,reservation_heure,dure,etat from reservation_salletp where etat='en cours'            ";
//die(print_r($query4));
$result1=mysqli_query($con,$query1);


if(isset($_POST['submit1']))
{
	$etat=$_POST['etat'];
	$code_reservation=$_POST['code_reservation'];



$query10= "      UPDATE reservation_salletp
SET etat= "."'".$etat."'"." where     num_reservation="."'".$code_reservation."'"."     ";
//die(print_r($query10));
$result10=mysqli_query($con,$query10);

}




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
			<img src="images/principal.PNG" width="160px" height="65px" margin-top="10px">
		</div>
		<nav>
			<ul>
				<li><a href="menuneoadmin.php?CNE=<?php echo $CNE?>&nom_etudiant=<?php echo $nom_etudiant?>&prenom_etudiant=<?php echo $prenom_etudiant?>" class="active">Acceuil</a></li>
			
				<li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</nav>


		
		<div class="toggle_menu">
			<i class="fas fa-bars" area-hidden="true"></i>
		</div>
	</header>
	<form class="terrain" method="post" >
		<p2> RESERVATION DE SALLE DE TP</p2></br></br>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">SALLE DE CONFERANCE</th>
      <th scope="col">SALLEtp</th>
      <th scope="col">DATE</th>
      <th scope="col">HEURE</th>
      <th scope="col">DURE</th>
       <th scope="col">ETAT</th>
      
    </tr>
  </thead>
  <tbody> <?php    while($row=$result1->fetch_assoc()):  ?>
    <tr>
      <th scope="row"> #</th>
      <td><?php echo $row['num_reservation']  ;?></td>
      <td><?php echo $row['nom_salletp']  ;?></td>
      <td><?php echo $row['reservation_date']  ; ?></td>
      <td><?php echo $row['reservation_heure']  ; ?></td>
      <td><?php echo $row['dure']  ; ?></td>
      <td><?php echo $row['etat']  ; ?></td>
      
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>



<p> CODE RESERVATION :</p>
		 <input type="text" name="code_reservation" id="code_reservation" class="input" placeholder="enter un code"><br>
<select name="etat" id="etat">
          
  <option class="dropdown-item" value="confirmer">CONFIRMER</option>

  <option class="dropdown-item" value="refuser">REFUSER</option>

  <input type="submit" name="submit1" value="Changer" class="buttn">
 
</select>

</form>



</body>
</html>