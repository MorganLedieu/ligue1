<?php

function vueAjoutjoueur($db){

    $admin=morgan;

if(($_SESSION['pseudo'])==$admin){
    echo'<div class="form-style-6">
    
    <br><h1><br>Ajouter un joueur : <br><br></h1>
    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Nom : <input type="text" name="nomjoueur" value="" />

    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Prénom : <input type="text" name="prenomjoueur" value="" />

    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Age : <input type="text" name="age" value="" />

    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Pays : <input type="text" name="pays" value="" />

    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">   
    Equipe : <input type="text" name="nomequipe" value="" />   

    
    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Poste : <input type="text" name="poste" value="" />   

    <form class="formu" action="src/controleur/ajoutjoueur.php" method="post">
    Image : <input type="text" name="src" value="" />   

    <br />
    <input type="submit" name="Modifier" value="Ajouter" />
</form>
</div>';
}
}
?>

