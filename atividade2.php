<?php

$i = 1;

$t = 0;

$vetor = array();

while($i <= 20){
    $random = rand(0, 5);
    if ($random == 3){
        $t++;
    }
    array_push($vetor, $random);
    $i++;
}
var_dump($vetor);
echo("O 3 apareceu ". $t . " vezes na lista.");