<?php

function vueModification($db){

    $admin=morgan;

if(($_SESSION['pseudo'])==$admin){
    echo'<div class="form-style-6">
    
    <br><h1><br>Changer les points d\'un utilisateur:<br><br></h1>
    <form class="formu" action="src/controleur/modification.php" method="post">
    Utilisateur: <input type="text" name="pseudo" value="" />
    <form class="formu" action="src/controleur/modification.php" method="post">
    points: <input type="text" name="points" value="" />
    <br />
    <input type="submit" name="Modifier" value="Modifier" />
</form>
</div>';
}
}
?>

