<?php

function bonjour_jour($jour = null, $nuit = "bonsoir")
{
    if ($jour == true) {
        echo $jour . "<br>";
    } else {
        echo $nuit . "<br>";
    }
}

bonjour_jour();
