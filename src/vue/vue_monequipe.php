<?php
function vueMonequipe($db){

  if(($_SESSION['pseudo'])){
    echo'<h1><br><br><br>L\'équipe de ' . $_SESSION['pseudo'] . ' <br></h1><br><div>
    <form class="formu" action="src/controleur/supequipe.php" method="post">
    <input class="btn2" type="submit" name="submit" value="Supprimer votre équipe" />
    </form>
    </div><h5>';

     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     $request = $db->query("SELECT * from equipejoueur WHERE pseudo='". $_SESSION['pseudo']."'");
     $nombre=0;
     while ($row = $request->fetch() ){
       $nombre++;
     
       if ($nombre <=5){
    echo'<div class="cadreje">'; 
        
    echo ('<img src="' . $row['src'] .'" />');
    echo $row["nomjoueur"] ;
    echo'&nbsp';
    echo $row['prenomjoueur'] ;
    echo'</div>&nbsp';

       }else{

    echo'&nbsp <h1>Votre équipe est compléte</h1>';

     }
}
}
}
