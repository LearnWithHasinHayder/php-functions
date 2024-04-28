<?php 

function add($n1, $n2){
    $sum = $n1 + $n2;
    return $sum;
}

$total = add(10,20);
// echo $total;

$total = add(200001,300002);
echo $total;