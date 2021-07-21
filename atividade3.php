<?php


$i = 1;
$arr = array();
$men = 10;
$pos = 0;
$exc = array();
while ($i <= 5) {
    $arr[] = mt_rand(0,10);
    $i++;
}
$i=0;
foreach($arr as $v){
    if ($v < $men){
    $men = $v;
    $pos = $i;
    } elseif ($v == $men){
    $exc[] = $i;
    }
    $i++;
}
if (empty($exc)){echo "Menor número: ".$men." na posição ".$pos;}
else {echo "Menor número: ".$men." nas posições ".$pos;}
foreach($exc as $v){
echo ", ".$v;
}