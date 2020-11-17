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
        
        if(!mysqli_query($mysqli,"INSERT INTO equipejoueur SET idjoueur=1, nomjoueur='Aouar', prenomjoueur='Houssem', src='https://1vs1-7f65.kxcdn.com/img/players/players/houssem-aouar_280421_292-ub-800.webp', pseudo='". $_SESSION['pseudo']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=monequipe");
                    exit;
            $AfficherFormulaire=0;
        }