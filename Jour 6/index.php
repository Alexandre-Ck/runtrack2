<?php
$genres = ['homme', 'femme', 'autre'];

$style = 'style.css';

if (isset($_POST['genre']) && in_array($_POST['genre'], $genres)) {
    $style = 'style' . $_POST['genre'] . '.css';
} else {
    $style = 'style.css';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire dynamique</title>
    <!-- Le bon fichier CSS sera chargé ici -->
    <link rel="stylesheet" href="<?= ($style) ?>">
</head>

<body>

    <h1>LISTE DÉROUTANTE</h1>

    <div class="container">
        <form action="index.php" method="post">
            <label for="genre">Choisissez un genre :</label>
            <select name="genre" id="genre">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select>
            <button type="submit">Envoyer</button>
        </form>
    </div>

</body>

</html>