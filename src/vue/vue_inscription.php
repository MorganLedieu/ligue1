<?php

function vueInscription($db){
    echo'<div class="form-style-6">
    
    <h1><br><br>Inscrivez vous :<br><br></h1>
    <form class="formu" action="src/controleur/inscription.php" method="post">
    Nom d\'utilisateur : <input type="text" name="pseudo" value="" />
    <br />
    Mot de passe : <input type="password" name="mdp" value="" />
    <br />
    Adresse email : <input type="email" name="email" value="" />
    <br />
    <input type="submit" name="inscription" value="Inscription" />
</form>
</div>';
}

?>

