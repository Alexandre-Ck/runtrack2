<?php
$resultat = "";

for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        $resultat .= "<b><u>$i</u></b><br />"; 
    } else {
        $resultat .= "$i<br />";
    }
}



echo $resultat;


?>