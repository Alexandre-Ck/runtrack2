<?php

$resultat = "";

for( $i=0; $i<=1000; $i++){
    if($i%3 && $i%5){
        $resultat .= "FizzBizz" . "<br>";
    }
    elseif($i%3){
        $resultat .= "Bizz" . "<br>";
    }

    elseif($i%5){
        $resultat .= "Fizz" . "<br>";
    }

    else{
        $resultat .= $i . "<br>";
    }
    
}
echo $resultat;



?>