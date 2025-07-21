<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: brown;
            margin-top: 60px;

        }
    </style>
</head>

<body>
    <form action="page.php" method="POST">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="text" name="email">
        <input type="submit" value="Envoyer">

    </form>

    <?php
    $cle = array_keys($_POST); // ca donne la valeur de l'argument xontrairement a $_GET!!!
    ?>

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> <?php echo $cle[0]; ?> </td>
                <td> <?php echo $_POST['nom']; ?> </td>

            </tr>

            <tr>
                <th> <?php echo $cle[1]; ?> </td>
                <td> <?php echo $_POST['prenom']; ?> </td>

            </tr>


            <th> <?php echo $cle[2]; ?> </td>
            <td> <?php echo $_POST['email']; ?> </td>

            </tr>

        </tbody>
    </table>


</body>



</html>