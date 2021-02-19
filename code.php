<?php
$min =1;
function generateNum($max){
    $pin = "";
    
for($i=0; $i<$max; $i++){$pin .= mt_rand(0,9);}
    echo "$pin <br>";
    
}

while($min <= 250){
    echo generateNum(12);
    $min++;
}



?>
