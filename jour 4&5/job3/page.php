<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="page.php" method="post">
        <input type="text" name="nom"> <br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_POST)) {
        $nombreArguments = count($_POST);
        echo "<p>Le nombre d'argument POST envoyé est : $nombreArguments</p>";
    }
    ?>
</body>

</html>