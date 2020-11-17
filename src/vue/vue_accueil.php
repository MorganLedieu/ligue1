<?php

function vueAccueil($db){
    echo'
    <div class=accueil >
    </br></br>
    <section id="top" class="hero"><img src="https://uploads-ssl.webflow.com/5b13df51d0d5fe8211f203da/5b13f381541a8480ba1420db_square.svg"  alt="" class="square" />
           <div class="wrapper">
               </br><h8 class="hero-title hero-title-main">Bonjour. <br/>' . $_SESSION['pseudo'] . '</h8>
           </div>
       </section>
       <div id="about" class="section section-blue">
           <div class="wrapper">
               <h3 class="header color-white header-light"><span class="color-blue-dark">League One ? </span>Crées ton équipe et cumules des points au fil des semaines pour finir premier dans le classement</h3>
               <p class="paragraph color-white">Le principe de ce site est simple, chaque semaine crées ton équipe de 5 joueurs de ligue 1, ces joueurs te permettront
               de cumuler des points par rapport à leurs statistiques de la vie réelle, plus le joueur aura fait un bon match, plus tu gagneras de points et donc plus tu monteras dans le classement.
               Tu peux modifier ton équipe avant chaque journée de ligue 1, le grand gagnant sera celui qui aura cumuler le plus de point à la fin de la saison. Bonne chance ' . $_SESSION['pseudo'] . '  </h6></p>
           </div>
       </div>';
}

?>

