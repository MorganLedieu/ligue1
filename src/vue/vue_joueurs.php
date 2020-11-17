<?php
function vueJoueurs($db){
    
    echo'<h1><br><br><br>Liste des joueurs de ligue 1</h1></br><h2> Par ordre Alphabétique</h2><h4>';
    
    
     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     $request = $db->query("SELECT * from joueurs ORDER BY nomjoueur ASC");
     while ($row = $request->fetch()){
        echo'<div class="cadrej">';
        
        
    echo ('<img src="' . $row['src'] .'" />');
    if(isset($_SESSION['pseudo'])){
    echo'<li>
    <form class="formu" action="src/controleur/joueurs/' . $row['idjoueur'] .'.php" method="post">
    <input class="btn" type="submit" name="submit" value="Ajouter à votre équipe" />
    </form></br>&nbsp';}
    
    echo $row["nomjoueur"] ;
    echo'&nbsp  &nbsp;';
    echo $row['prenomjoueur'] ;
    echo'&nbsp  &nbsp;';
    echo $row["age"] ;
    echo'ans&nbsp  &nbsp;';
    echo $row['pays'] ;
    echo'&nbsp  &nbsp;';
    echo $row["nomequipe"] ;
    echo'&nbsp  &nbsp;';
    echo $row['poste'] ;
    echo'';
    echo'</div>&nbsp';
     
     }
}
