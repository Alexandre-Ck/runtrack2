<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$resultat = "";

//On parcourt la chaine de caractere $str en commencant par le premier caractere (d'indice 0)
//et en s'arretant au dernier caractere (d'indice strlen($str) - 1)
//On incremente $i de 2 a chaque tour de boucle, ce qui signifie que l'on prend
//un caractere sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    //a chaque tour de boucle, on ajoute le caractere d'indice $i a la chaine $resultat
    $resultat .= $str[$i]; // le resultat sera une chaine de caractere de la phrase qu'on vie d'incrementer de 2 !!!!!
}
echo $resultat;
