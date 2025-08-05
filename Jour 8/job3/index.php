<?php

session_start(); // on demarre la session

$prenom = $_POST['prenom']; // on recupere le prenom

$prenoms = $_SESSION['prenom']; // on recupere le prenom

if (isset($prenom)) { // si le prenom existe
    $_SESSION['prenom'] = $prenom;  // on l'ajoute a la session
    echo ' . ' . $_SESSION['prenom'] . "<br>"; // on l'affiche
}

if (isset($prenoms)) { // si le prenom existe
    echo ' . ' . $prenoms;  // on l'affiche
}



if (isset($_POST['reset'])) { // si le bouton reset a ete appuyer
    unset($_SESSION); // on supprime la session
    header('Location: ' . $_SERVER['PHP_SELF']); // on redirige vers la page
    exit;
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

    <form action="index.php" method="POST">
        <input type="text" name="prenom" placeholder="prenom">
        <button type="submit">envoyer</button>
        <input type="submit" name="reset" value="reset" style="background-color: red; color: white">
    </form>

</body>

</html>