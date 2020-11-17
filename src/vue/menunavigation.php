<?php


    

function entete(){

  echo'<div class="page">
  <header tabindex="0">
  </header>



  <nav>
  
  
  
';



$admin=morgan;

if(($_SESSION['pseudo'])==$admin){
  echo'
            <a href="" class="nav-item is-active w-nav-link w--current" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administration : </a>

            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=modification" class="nav-item is-last-h w-nav-link" >Modifier les points</a>
            
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=ajoutjoueur" class="nav-item is-last-h w-nav-link">Ajouter des joueurs</a>
            
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=listeutilisateur" class="nav-item is-last-h w-nav-link">Liste des users</a>
            
  
';
}


  if(($_SESSION['pseudo'])){
 echo'

 
 
 
<div id="container" class="container">
<div data-animation="default" class="nav w-nav" data-easing2="ease-in-out" data-easing="ease-out-expo" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="500" id="nav">
    <div class="wrapper w-container">
        <div class="nav-body">
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=accueil" aria-current="page" class="nav-item is-active w-nav-link w--current">League One</a>
            <nav role="navigation" class="nav-menu w-nav-menu">
            
              <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=joueurs"class="nav-item is-last-h w-nav-link">Liste des joueurs</a>
              <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=equipes"class="nav-item is-last-h w-nav-link">Liste des équipes</a>
           <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=statsequipe"class="nav-item is-last-h w-nav-link">Stats Equipes</a>
             <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=statsjoueur"class="nav-item is-last-h w-nav-link">Stats Joueurs</a>  
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=contact" class="nav-item is-last-h w-nav-link">Contact</a>         
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=monequipe" class="nav-item is-last-h w-nav-link">Vers mon équipe</a>
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=profilutilisateur" class="nav-item is-last-h w-nav-link">Vers mon profil</a>      
            <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=classement" class="nav-item is-last-h w-nav-link">Classement</a>
             <a href="src/controleur/deconnexion.php" class="nav-item is-last-h w-nav-link">Deconnexion</a>
             </nav>
            
            
            <div class="nav-toggle w-nav-button"></div>
        </div>
        <div class="hr hr-thin"></div>
    </div>
</div>
';
                      
  }else {
 
   echo '
   
   <div id="container" class="container">
       <div data-animation="default" class="nav w-nav" data-easing2="ease-in-out" data-easing="ease-out-expo" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="500" id="nav">
           <div class="wrapper w-container">
               <div class="nav-body">
                   <a  aria-current="page" class="nav-item is-active w-nav-link w--current">League One</a>
                   <nav role="navigation" class="nav-menu w-nav-menu">
                   <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=accueil" aria-current="page" class="nav-item is-last-h w-nav-link">Accueil</a>
                   
              <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=joueurs"class="nav-item is-last-h w-nav-link">Liste des joueurs</a>
              <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=equipes"class="nav-item is-last-h w-nav-link">Liste des équipes</a>
                   <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=connexion" class="nav-item is-last-h w-nav-link">Connexion</a>
                   <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=inscription" class="nav-item is-last-h w-nav-link">Inscription</a>
                   <a href="http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=contact" class="nav-item is-last-h w-nav-link">Contact</a></nav>
                   <div class="nav-toggle w-nav-button"></div>
               </div>
               <div class="hr hr-thin"></div>
           </div>
       </div>
       ';
 
  }
}


?>