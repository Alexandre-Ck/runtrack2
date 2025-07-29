<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form action="index.php" method="post" id="form">
            <input type="text" name="str">
            <select name="id" id="">
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
            <button type="submit">Envoyer</button>


        </form>
    </div>
</body>

</html>

<?php
function gras($str)
{
    return "<b>" . $str . "</b>";
}

$str = $_POST["str"];

if ($str == ucfirst($str)) {
    echo gras($str);
} else {
    echo $str;
}


function cesar($str, $decalage)
{
    $str = $_POST["str"];
    $decalage = $str++;

    return $str = preg_replace("/a+/", "a", $str);
}
cesar($str, 1);










?>