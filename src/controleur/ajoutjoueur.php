<?php
    
    /* page: card1.php */
//connexion à la bdd:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "login4158";
$BDD['pass'] = "NcaPeMOaPkuZPAP";
$BDD['db'] = "dblogin4158";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
session_start();
$pseudo = $_SESSION['pseudo'];
        
        if(!mysqli_query($mysqli,"INSERT INTO joueurs SET nomjoueur='".$_POST['nomjoueur']."', prenomjoueur='".$_POST['prenomjoueur']."',age='".$_POST['age']."',pays='".$_POST['pays']."',nomequipe='".$_POST['nomequipe']."', src='".$_POST['src']."', poste='".$_POST['poste']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=joueurs");
                    exit;
            $AfficherFormulaire=0;
        }