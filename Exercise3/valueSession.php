<?php
/**
 * Ce code appelle la fonction session_start() pour démarrer une nouvelle session, puis définit deux variables de session, "username" et "email". Enfin, les valeurs de ces variables de session sont affichées sur la page en utilisant la syntaxe echo.
 */
// Démarrage de la session
session_start();

// Définition de variables de session
$_SESSION['username'] = "MonNomUtilisateur";
$_SESSION['email'] = "monemail@exemple.com";

// Affichage des variables de session
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'];
?>
