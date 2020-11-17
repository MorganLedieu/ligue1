<?php
function vueListeutilisateur($db){
  $admin=morgan;

  if(($_SESSION['pseudo'])==$admin){
   echo'<h1><br><br><br>Liste des utilisateurs de League One</h1></br><h2> Du plus ancien au plus récent</h2><h5>';
     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     $request = $db->query("SELECT * from membres ORDER BY idmembre ASC");
   echo'<div class="classementt">'; 
   echo '<h5><td>ID</td>';
   echo'&nbsp;&nbsp;&nbsp;';
   echo ' | &nbsp;&nbsp;<td>Nom d\'utilisateur</td>&nbsp;&nbsp; |';
   echo'&nbsp;&nbsp;&nbsp;';
   echo '<td>Mail</td>';
   echo '</h5>';



     while ($row = $request->fetch()){

      
       
    echo'<br>&nbsp; ';
    echo $row["idmembre"] ;
    echo'&nbsp | &nbsp;';
    echo $row['pseudo'] ;
    echo'&nbsp | &nbsp;';
    echo $row['email'] ;
    echo'<span>';
    echo'</br>&nbsp';
     }
}
}