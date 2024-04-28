<?php 

$name = "John Doe";

function greet(&$name){
    echo "Hi " . $name;
    $name ="Jane Doe";
}
greet($name);
echo $name;

