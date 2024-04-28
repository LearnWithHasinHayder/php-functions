<?php 
$mathMarks = [
    'john'=>85,
    'sarah'=>95,
    'david'=>70,
    'mary'=>60,
    'james'=>75,
    'tom'=>80,
    'jill'=>90
];

function calculateGrade($mark) {
    if($mark >= 90) {
        return "A";
    } elseif($mark >= 80) {
        return "B";
    } elseif($mark >= 70) {
        return "C";
    } elseif($mark >= 60) {
        return "D";
    } else {
        return "F";
    }
}

foreach($mathMarks as $student => $mark) {
    $grade = calculateGrade($mark);
    echo "$student got $mark and grade is $grade" . "\n";
}

// $johnsMark = $mathMarks['john'];
// //calculate grade
// $johnsGrade = calculateGrade($johnsMark);
// echo $johnsGrade;

// $sarahsMark = $mathMarks['sarah'];
// $sarahsGrade = calculateGrade($sarahsMark);
// echo $sarahsGrade;