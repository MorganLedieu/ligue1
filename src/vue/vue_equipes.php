<?php
function vueEquipes($db){
    
    echo'<h1><br><br><br>Liste des équipes de ligue 1</h1></br><h2> Par ordre Alphabétique</h2><h5>';
     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     $request = $db->query("SELECT * from equipes ORDER BY nomequipe ASC");
     while ($row = $request->fetch()){
        echo'<div class="cadre">  '; 
        
    echo ('<img src="' . $row['src'] .'"/></br></br></br>');
    echo $row["nomequipe"] ;
    echo'&nbsp | &nbsp;';
    echo $row['datecreation'] ;
    echo'&nbsp;    ';
    echo'';
    echo'</div>&nbsp';
     }
}
