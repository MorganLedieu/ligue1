<?php
/*
Page: connexion.php
*/
session_start(); 
if(isset($_POST['connexion'])) { 
    
    if(empty($_POST['pseudo'])) {
        echo "Le champ Pseudo est vide.";
                    exit;
    } else {
        
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.";
                    exit;
        } else {
            
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); 
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
            
            $mysqli = mysqli_connect("localhost", "login4158", "NcaPeMOaPkuZPAP", "dblogin4158");
            
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
                    exit;
            } else {
                
                $Requete = mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo = '".$Pseudo."' AND mdp = '".$MotDePasse."'");
                
               
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    
                    $_SESSION['pseudo'] = $Pseudo; 
                    header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=accueil");
                    exit;

                }
            }
        }
    }
}
?>