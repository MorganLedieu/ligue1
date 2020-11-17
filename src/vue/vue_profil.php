<?php
function vueProfil($db){
    
    echo'<h1><br><br><br>Profil de '. $_SESSION['pseudo'].'</h1></br><h2>';
     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     $request = $db->query("SELECT * from membres WHERE pseudo='". $_SESSION['pseudo']."'");
     while ($row = $request->fetch()){
        echo'<div>'; 
        
    echo $row['datenaissance'];
    echo'</br>Nom d\'utilisateur : ';
    echo $row["pseudo"] ;
    echo'</br> Adresse email : ';
    echo $row['email'] ;
     
     echo'</div>&nbsp';
     }
}
