<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
$voyelle = 0;
$consonne = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $lettre = strtolower($str[$i]);

    if (in_array($lettre, $voyelles)) {
        $voyelle++;
    } elseif (in_array($lettre, $consonnes)) {
        $consonne++;
    }
}

echo "<table style='width:100%'>
            <tr>
                <th>consonnes</th>
                <th>voyelles</th>
            </tr>
            <tr>
                <td>$consonne</td>
                <td>$voyelle</td>
            </tr>
          </table>";
