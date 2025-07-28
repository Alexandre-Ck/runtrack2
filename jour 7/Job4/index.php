<?php

function calcule($a, $operation, $b)
{


    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        return $a / $b;
    }
}


echo "\n" . calcule(3, "+", 2);
echo "\n" . calcule(3, "-", 2);
echo "\n" . calcule(3, "*", 2);
echo "\n" . calcule(3, "/", 2);
