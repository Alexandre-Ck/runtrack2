<?php

session_start();

if (isset($_POST['reset'])) { //si le bouton reset a ete appuyer
    $_SESSION['nbvisite'] = 0;
    header('Location: ' . $_SERVER['PHP_SELF']); // fonction pour reintialiser la page au debut
    exit;
}

if (!isset($_SESSION['nbvisite'])) //la variable de session 'nbvisite' n'a jamais été créée... 
{
    $_SESSION['nbvisite'] = 0;
} else {
    $_SESSION['nbvisite']++;
}



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
            <p><?php echo "Mes cheres visiteurs : le Nombre de visites : " . $_SESSION['nbvisite']; ?></p>
            <button type="submit" name="reset">Reset </button>
        </form>
    </div>

</body>

</html>