<?php
    // Stocker les détails de connexion en utilisant un cookie
    setcookie("username", "AngeTia", time() + (86400 * 30), "/"); // 86400 = 1 jour

    // Déclarer les variables $submit et $logIn et les initialiser à false
    $submit = false;
    $logIn = false;

    // Soumettre le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Définir la variable $submit sur true si le formulaire est soumis
        $submit = true;

        // Vérifier si le nom d'utilisateur stocké dans le cookie correspond à celui soumis dans le formulaire
        if (($_COOKIE["username"] == $_POST["username"])) {
            // Si les noms d'utilisateur correspondent, définir $logIn sur true
            $logIn = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise 1</title>
    </head>
    <body>
        <!-- Formulaire de connexion -->
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Username</label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Valider">
        </form>
    <!-- Message de connexion -->
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "success" : "error" ?> </h3>
    <?php endif; ?>
    </body>
</html>


