<?php
session_start();
session_destroy();
header("Location: http://serveur1.arras-sio.com/symfony4-4158/ligue1/index.php?page=accueil");
                    exit;
?>