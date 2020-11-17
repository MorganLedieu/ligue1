<?php
    
    /* page: inscription.php */
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "login4158";
$BDD['pass'] = "NcaPeMOaPkuZPAP";
$BDD['db'] = "dblogin4158";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);

    
if(isset($_POST['pseudo'],$_POST['mdp'])){
    if(empty($_POST['pseudo'])){
        echo "Le champ Pseudo est vide.";
    } elseif(strlen($_POST['pseudo'])>25){
        echo "Le pseudo est trop long, il dépasse 25 caractères.";
    } elseif(empty($_POST['mdp'])){
        echo "Le champ Mot de passe est vide.";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='".$_POST['pseudo']."'"))==1){
        echo "Ce pseudo est déjà utilisé.";
    } else {

        
        if(!mysqli_query($mysqli,"INSERT INTO membres SET pseudo='".$_POST['pseudo']."', mdp='".$_POST['mdp']."', email='".$_POST['email']."'" )){
            
            
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            
            (!mysqli_query($mysqli,"INSERT INTO classement SET pseudo='".$_POST['pseudo']."', points='0'" ));
            echo "Vous êtes inscrit avec succès!";
            header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=connexion");
                    exit;
            
        }
    }
}