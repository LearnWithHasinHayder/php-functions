<?php
$i = 0;

$fruits = ['apple', 'banana', 'orange', 'grape', 'mango', 'x', 'y', 'z'];
//indexed
$totalFruits = count($fruits);


// foreach($fruits as $fruit) {
//     echo $fruit . "\n";
// }

// for ($i = 5; $i <= 30; $i += 5) {
//     // if($i % 2 == 0) {
//     //     echo $i . "\n";
//     // }
//     echo $i . "\n";
// }

// for ($i=0; $i < $totalFruits; $i++) {
//     echo $fruits[$i] . "\n";
// }

$i = 0;
do {
    $i += 1;
    echo $i . "\n";
    if($i == 5) {
        break;
    }
} while ($i < 10);
