<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="page.php" method="get">
        <input type="text" name="nombre">
        <input type="submit" name="valider">
    </form>

    <?php
    if (isset($_GET['valider'])) {
        $nombre = $_GET['nombre'];
        if ($nombre % 2 == 0) {
            echo "<p>Le nombre est pair</p>";
        } else {
            echo "<p>Le nombre est impair</p>";
        }
    }
    ?>
</body>

</html>