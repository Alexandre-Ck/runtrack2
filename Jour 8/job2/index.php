<?php

setcookie("nbvisite", 0, time() + 3600 * 24 * 365);

if (isset($_POST['reset'])) { //si le bouton reset a ete appuyer
    setcookie("nbvisite", 0); // ca va l'executer
    header('Location: ' . $_SERVER['PHP_SELF']); // fonction pour reintialiser la page au debut
    exit;
}

if (isset($_COOKIE['nbvisite'])) { //si la variable existe
    $_COOKIE['nbvisite']++; // ca va creer notre variable indispensable pour l'execution en ++ autant de fois que la page est vivité
    setcookie("nbvisite", $_COOKIE['nbvisite']); // ca va l'executer Dieu merci..
}

if (isset($_COOKIE['nbvisite'])) { //si la variable existe
    echo "Mes cheres visiteurs : le Nombre de visites : " . $_COOKIE['nbvisite'];
} // SI JE Voulais afficher de cette maniere sans l'ecrire en html 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form action="index.php" method="post">
            <p><?php echo "Mes cheres visiteurs : le Nombre de visites : " . $_COOKIE['nbvisite']; ?></p>
            <button type="submit" name="reset">Reset </button>
        </form>
    </div>

</body>

</html>