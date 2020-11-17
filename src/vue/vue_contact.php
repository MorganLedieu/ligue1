<?php

function vueContact($db){
    echo'<br><div class="form-style-6">
    <h1><br>Contactez nous :<br><br></h1>
    <form class="formu" action="src/controleur/contact.php" method="post">
    Adresse email:<input type="email" name="email"  />
    <br />
    Message: <textarea name="content" cols="40" rows="20"></textarea>
    <br />
    <input type="submit" name="submit" value="Envoyer" />
</form>
</div>';
}

?>

