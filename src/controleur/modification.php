<?php
    
    /* page: inscription.php */
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "login4158";
$BDD['pass'] = "NcaPeMOaPkuZPAP";
$BDD['db'] = "dblogin4158";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);


        
        if(!mysqli_query($mysqli,"UPDATE classement SET points ='".$_POST['points']."' WHERE pseudo ='".$_POST['pseudo']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=modification");
                    exit;
            
            $AfficherFormulaire=0;
        }
 