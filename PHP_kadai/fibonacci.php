<?php

$a = 0;
$b = 1;
$fibo = 0;

while($fibo <= 10000){
    
    $fibo = $a;
    $a = $b;
    $b = $fibo + $b;
    
    echo "{$fibo} \n";

    ++$fibo;
}