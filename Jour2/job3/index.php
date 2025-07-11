<?php
 $resultat = "";

for ($i = 0; $i <= 100; $i++){

    if ($i === 42) {
     $resultat .= "La plateforme baby!!!!!!<br/>"; 

    } elseif ($i >= 25 && $i <= 50) {
    $resultat .= "<u>$i</u> <br/>"; 

    } elseif ($i>= 0 && $i <= 20){
     $resultat .= "<i>$i</i> <br/>"; 
    }  
    else {
     $resultat .= "$i <br/>"; 
    }
    
}
 echo $resultat .  "<br />"; 
?>

 