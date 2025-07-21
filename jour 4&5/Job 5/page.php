<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="page.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        echo "Nom d'utilisateur : " . $_POST['username'] . "<br>";
        echo "Mot de passe : " . $_POST['password'] . "<br>";
    }
    if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
        echo "<p>C'est pas ma guerre!!!!!!</p>";
    } else {
        echo "<p>C'est tout good frerot</p>";
    }
    ?>
</body>

</html>