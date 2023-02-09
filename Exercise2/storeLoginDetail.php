<?php
/**
 * Ce code utilise la fonction setcookie pour définir un cookie appelé "username" qui stockera le nom d'utilisateur. Le cookie est défini pour durer 30 jours à partir de la date actuelle. Enfin, le code vérifie la présence du cookie en utilisant la fonction isset et affiche un message en conséquence.
 */
// Définition d'un cookie pour stocker le nom d'utilisateur
setcookie("username", "MonNomUtilisateur", time() + (86400 * 30), "/"); // 86400 = nombre de secondes dans une journée

// Vérification de la présence du cookie pour déterminer si l'utilisateur est connecté
if(isset($_COOKIE['username'])) {
    echo "Bienvenue, " . $_COOKIE['username'] . "!";
} else {
    echo "Vous n'êtes pas connecté.";
}
?>