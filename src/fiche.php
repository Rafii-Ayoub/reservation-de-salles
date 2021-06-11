
<?php    $nom_etudiant=$_GET['nom_etudiant'];
$prenom_etudiant=$_GET['prenom_etudiant'];
$CNE=$_GET['CNE'];
$reservation_date=$_GET['reservation_date'];
$reservation_heure=$_GET['reservation_heure'];
$dure=$_GET['dure']; 
$objet=$_GET['objet']; 
      ?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Fiche de reservation</title>
        <link rel="shortcut icon" href="images/ENSAMIEN.png"/>
        <link href="styles/stylefiche.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .imprimer{
  text-align: center;
  position: absolute;
  right: 50%;
}
.buttn{
  border:1px solid #3498db;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin:20px;
}
.buttn:hover{
    color: black;
}
.buttn::before{
  content: "";
  position: absolute;
  left: 50%;
  width: 100%;
  height: 0%;
  background-color:blue;
  z-index: -1;
  transition: 0.8s
}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="images/logo.png" class="logo"></td>
                <td><img src="images/ENSAM.jpeg" class="logo_ensam"></td>
            </tr>
        </table>
        <p class="bienvenu">Votre reservation est confirmée</p>
        <div class="fiche">
            <table>
                    <p class="signature"><font face="Times New Roman" color="#005480" size="6.5px">Réservation de : <?php echo $objet ?></font></p>
                    <tr>
                        <th>Nom:</th>
                        <td><?php echo $nom_etudiant ?></td>
                    </tr>
                    <tr>
                        <th>Pr&eacute;nom:</th>
                        <td><?php echo $prenom_etudiant ?></td>
                    </tr>
                    <tr>
                        <th>CNE:</th>
                        <td><?php echo $CNE ?></td>
                    </tr>
                    <tr>
                        <th>Date de reservation:</th>
                        <td><?php echo $reservation_date ?></td>
                    </tr>
                    <tr>
                        <th>Heure de reservation:</th>
                        <td><?php echo $reservation_heure ?></td>
                    </tr>
                    <tr>
                        <th>Durée de reservation:</th>
                        <td><?php echo $dure ?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>  
                </table>  
        </div>
        <div class="signature">
          <p><font face="Times New Roman" color="#0000" size=5px >signature:</font></p>  
        </div>
        <div class="imprimer">
            <button onclick="window.print()" id= "print" name="" class="buttn">Imprimer</button>
        </div>
    </body>
</html>