<?php

  $name = $_REQUEST['name']; // Récupérer le nom depuis la requête
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>

    <h1>Bienvenue, <?php echo $name; ?> !</h1> 
    <!-- Formulaire pour se "déconnecter" -->
    <form action="index.php" method="POST">
        <button type="submit" style="background-color: red;">Déconnexion</button>
    </form>
    
</body>
</html>
