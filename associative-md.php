<?php
$marks = [
    'john' => [
        'math' => 85,
        'science' => 90,
        'english' => 75
    ],
    'sarah' => [
        'math' => 95,
        'science' => 80,
        'english' => 70
    ]
];

foreach($marks as $student => $subjects) {
    $totalMarks = 0;
    foreach($subjects as $subject => $mark) {
        $totalMarks += $mark;
    }
    echo "$student got $totalMarks marks" . "\n";
}