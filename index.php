<?php

require_once 'src/modele/routes.php';
require_once 'src/vue/menunavigation.php';
require_once 'src/vue/footer.php';
require_once 'src/vue/vue_accueil.php';
require_once 'src/vue/vue_connexion.php';
require_once 'src/controleur/connexion.php';
require_once 'src/vue/vue_inscription.php';
require_once 'src/controleur/inscription.php';
require_once 'src/vue/vue_contact.php';
require_once 'src/vue/vue_classement.php';
require_once 'src/vue/vue_modification.php';
require_once 'src/vue/vue_equipes.php';
require_once 'src/vue/vue_monequipe.php';
require_once 'src/vue/vue_joueurs.php';
require_once 'src/vue/vue_profil.php';
require_once 'src/vue/vue_listeutilisateur.php';
require_once 'src/vue/vue_statsequipe.php';
require_once 'src/vue/vue_statsjoueur.php';
require_once 'src/vue/vue_ajoutjoueur.php';

echo'<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>League One</title>
    <link rel="stylesheet" href="/symfony4-4158/ligue1/src/vue/ressources/ligue1.css" media="screen" type="text/css" />
    
  <link href="https://uploads-ssl.webflow.com/5b13df51d0d5fe8211f203da/css/okalpha-website.webflow.c3ca3ea49.css" rel="stylesheet" type="text/css" />
    <link href="/symfony4-4158/ligue1/src/vue/ressources/back/logo1.png" rel="shortcut icon" >
    
</head>

<body>';

entete();

$contenue=getPage();
$contenue($db);

echo'</body>';

echo'</html>';

?>
