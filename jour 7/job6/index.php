<?php

function leetSpeak($str)
{
    $chiffre = array("A" => "4", "a" => "4", "B" => "8", "b" => "8",  "C" => "k", "c" => "k", "D" => "0", "d" => "0",  "E" => "3", "e" => "3", "G" => "6", "g" => "6", "L" => "1", "l" => "1", "S" => "5", "s" => "5", "T" => "7", "t" => "7");

    return strtr($str, $chiffre);
}

echo leetSpeak("Salut la famille");
