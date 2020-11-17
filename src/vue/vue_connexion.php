<?php

function vueConnexion($db){

    echo'
    
    <div class="form-style-6">
    
    <h1><br><br>Connectez vous :<br><br></h1>
    <form class="formu" action="src/controleur/connexion.php" method="post">
    Utilisateur: <input type="text" name="pseudo" value="" />
    <br />
    Mot de passe: <input type="password" name="mdp" value="" />
    <br />
    <input type="submit" name="connexion" value="Connexion" />
</form>

</div>


';
}

?>


