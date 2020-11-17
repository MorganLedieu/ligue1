<?php

    function getPage(){
        $lesPages['accueil']="vueAccueil";
        $lesPages['connexion']="vueConnexion";
        $lesPages['inscription']="vueInscription";
        $lesPages['contact']="vueContact";
        $lesPages['classement']="vueClassement";
        $lesPages['modification']="vueModification";
        $lesPages['equipes']="vueEquipes";
        $lesPages['monequipe']="vueMonequipe";
        $lesPages['joueurs']="vueJoueurs";
        $lesPages['profilutilisateur']="vueProfil";     
        $lesPages['listeutilisateur']="vueListeutilisateur";         
        $lesPages['statsequipe']="vueStatsequipe";
        $lesPages['statsjoueur']="vueStatsjoueur";
        $lesPages['ajoutjoueur']="vueAjoutjoueur";


        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }
        else{
            $page="accueil";
        }

        return $lesPages[$page];
    }

?>