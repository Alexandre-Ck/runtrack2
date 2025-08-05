<?php


if (isset($_POST['name']) & !empty($_POST['name'])) { // vérifier si le nom est défini et non vide
    $name = htmlspecialchars($_POST['name']);
    setcookie('name', $name, time() + 86600); // un jour = 86400 secondes, donc 1 heure = 3600 secondes
}
 
if (isset($name)) {
    header('Location: index2.php?name=' . urlencode($name)); // rediriger vers index2.php avec le nom en paramètre
    exit; // terminer le script pour éviter d'afficher du contenu supplémentaire   
}  

echo "Veuillez entrer votre nom.";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST['name'])) // vérifier si le formulaire a été soumis et si le nom est vide
 {
    setcookie('name', '', time() - 3600); // supprimer cookie
    echo "Vous êtes déconnecté."; // afficher un message de déconnexion
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
        <input type="text" name="name" placeholder="prenom ">   
         <button type="submit" style ="background-color: green;" >Connnexion</button>
    </form>
</body>
</html>