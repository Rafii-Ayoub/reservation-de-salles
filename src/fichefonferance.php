
<?php    $nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];
$CNE=$_GET['CNE'];
$reservation_date=$_GET['reservation_date'];
$reservation_heured=$_GET['reservation_heured'];
$reservation_heuref=$_GET['reservation_heuref']; 
$objet=$_GET['objet']; 
      ?>


<html>
    <head>
        <meta charset="utf-8">
        <title>****</title>
        <link rel="shortcut icon" href="images/ENSAMIEN.png"/>
        <link href="styles/stylefiche.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <table>
            <tr>
                <td><img src="images/logo.png" class="logo"></td>
                <td><img src="images/ENSAM.jpeg" class="logo_ensam"></td>
            </tr>
        </table>
        <p class="bienvenu">Votre reservation est confirmée</p>
       







                    <p>Je soussigné Mr Abourich agissant en tant que responsable de l’école national d’art et métiers certifie que <b><?php echo $nom_etudiant ?> <?php echo $prenom_etudiant ?></b> ayant comme CNE <b>‘<?php echo $CNE ?>'</b>   , aura l’accessibilité au service scolaire concernant l’utilisation de ‘<b>‘<?php echo $objet ?>’</b> ’      ‘’ .
Je vous rappelle que la réservation est prévue pour le <b>‘<?php echo $reservation_date ?>’    ‘<?php echo $reservation_heured ?>’</b>   a <b><?php echo $reservation_heured ?> H</b>
</p>
                     
        </div>
        <div class="signature">
          <p><font face="Times New Roman" color="#0000" size=5px >signature:</font></p>  
        </div>
    </body>
</html>