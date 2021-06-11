<!DOCTYPE html>
<?php include('databases/databases.php');  

if(isset($_POST['submit']))
{   


    $nom_etudiant=htmlentities(trim($_POST['nom_etudiant']));
    $prenom_etudiant=htmlentities(trim($_POST['prenom_etudiant']));
    $CNE=htmlentities(trim($_POST['CNE']));


}
    
if (!(empty($CNE))){
    

    $query1="select * from etudiant where CNE = "."'".$CNE."'"." &&  nom = "."'".$nom_etudiant."'"."   && prenom="."'".$prenom_etudiant."'"."  ;"  ;
    //die(print_r($query1));
    
$result=mysqli_query($con,$query1);
$res=mysqli_num_rows($result);

if($res){
    if($CNE=='F149074176'){ 
	
echo "<script language='Javascript'>
<!--
document.location.replace(https://tp-epua.univ-smb.fr/~rafiia/reservation/menuneo.php?CNE='.$CNE.'&nom_etudiant='.$nom_etudiant.'&prenom_etudiant='.$prenom_etudiant);
// -->
</script>";
exit();
}
    else{
		
echo "<script language='Javascript'>
<!--
document.location.replace(https://tp-epua.univ-smb.fr/~rafiia/reservation/menuneo.php?CNE='.$CNE.'&nom_etudiant='.$nom_etudiant.'&prenom_etudiant='.$prenom_etudiant);
// -->
</script>";
exit();
    }
}


}


?>


<html>
    <head>
        <meta charset="utf-8">
        <title>LOG_IN</title>
        <link href="style2.css" rel="stylesheet" type="text/css">
      
    </head>




    <body class="log_in" style="margin:auto;">
	
<div style = "text-align:center; background-color:#4682B4; margin:auto  ; "> <h2> Bienvenu sur notre application de réservation des salles </h2> </div>
<div>

        <img src="images/principal.PNG" class="logo">
       


        <form class="box" action="" method="post">



            <h2><font  face="Goudy Old Style" color= #4682B4 size=34>S'identifier</font></h2>



            <input type="text" name="nom_etudiant" id="nom_etudiant" placeholder="Nom d&#145;utilisateur" style=" color: black;">
            <input type="text" name="prenom_etudiant" id="prenom_etudiant" placeholder="prenom d&#145;utilisateur" style=" color: black;">
            <input type="password" name="CNE" id="CNE" placeholder="code d&#145;utilisateur" style=" color: black;">
            <input type="submit" name="submit" id="submit" placeholder="VALIDER" >
<?php

if($res){
if(empty($CNE)){
    echo'<div style ="color:red;">Entrez votre CNE</div>' ;
}
elseif(empty($nom_etudiant)){
    echo'<div style ="color:red;">Entrez votre Nom</div>' ;
}
elseif(empty($prenom_etudiant)){
    echo'<div style ="color:red;">Entrez votre Prenom</div>';
}

else{
    echo '<div style ="color:red;">Information Fausse</div>';
}
}
?>
         
        </form>


</div>	


    </body>


	

</html>