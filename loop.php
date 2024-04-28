<?php
$countries = [
    'Bangladesh' => "Dhaka", 
    'India' => "New Delhi",
    'China' => "Beijing",
    'Japan' => "Tokyo",
    'Korea' => "Seoul",
    'Russia' => "Moscow",
];

// foreach($countries as $country => $capital) {
//     echo "The capital of $country is $capital" . "\n";
// }

foreach($countries as $key=>$value) {
    echo "The capital of $key is $value" . "\n";
}


//associative array