<?php
    
    /* page: contact.php */
//connexion à la bdd:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "login4158";
$BDD['pass'] = "NcaPeMOaPkuZPAP";
$BDD['db'] = "dblogin4158";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
session_start();
$pseudo = $_SESSION['pseudo'];
        
        if(!mysqli_query($mysqli,"INSERT INTO contact SET email='".$_POST['email']."', content='".$_POST['content']."',pseudo='". $_SESSION['pseudo']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=contact");
                    exit;
        }