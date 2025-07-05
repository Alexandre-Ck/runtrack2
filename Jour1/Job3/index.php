<?php
// Déclaration d'une variable de type string
$str="Hello World!";
// Déclaration d'une variable de type booléen
$myBool=true;
// Déclaration d'une variable de type float
$float=1.234;
// Déclaration d'une variable de type entier
$entier=6;

// Création d'un tableau associatif qui regroupe les variables avec leur type, nom et valeur
$variables = [
    ['type' => 'string', 'nom' => 'str', 'valeur' => $str],
    ['type' => 'boolean', 'nom' => 'myBool', 'valeur' => $myBool],
    ['type' => 'float', 'nom' => 'float', 'valeur' => $float],
    ['type' => 'integer', 'nom' => 'entier', 'valeur' => $entier]
];
// Affichage des variables

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables PHP</title>
    <style>
        /* Style du tableau pour une meilleure lisibilité */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Tableau des variables PHP</h2>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // Boucle sur chaque variable pour afficher ses informations dans une ligne du tableau
        foreach ($variables as $var): ?>
        <tr>
            <td><?php echo $var["type"]; ?></td>
            <td><?php echo $var["nom"]; ?></td>
            <td><?php echo $var["valeur"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>