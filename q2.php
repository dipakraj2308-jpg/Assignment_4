<?php
function findGrade($marks) {
    if ($marks >= 90) return "A+";
    if ($marks >= 80) return "A";
    if ($marks >= 70) return "B";
    if ($marks >= 60) return "C";
    if ($marks >= 50) return "D";
    return "F";
}

$marks = $_GET["marks"];

if ($marks === "" || $marks < 0 || $marks > 100) {
    echo "<div class='result'>Please enter marks between 0 and 100</div>";
} else {
    echo "<div class='result'>Marks: $marks, Grade: " . findGrade($marks) . "</div>";
}
?>