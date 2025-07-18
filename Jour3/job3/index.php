<?php

$str = "Tous ces instants seront perdus dans le temps";
$resultat = "";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
  if (in_array(($str[$i]), $voyelles)) {
    $resultat .= $str[$i];
  }
}

echo $resultat . "<br>";
