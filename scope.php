<?php
$n = "John Doe";

function greet($name, $greetings="Good Morning") {
    echo "$greetings $name";
}

// function greet() {
//     global $name;
//     echo "hi " . $name;
// }
// greet("John","Hello");

function getNumbers(){
    $output = [5,16];
    return $output;
}

list($a,$b) = getNumbers();
// $result = getNumbers();
// $a = $result[0];
// $b = $result[1];

echo $a ." - " . $b;