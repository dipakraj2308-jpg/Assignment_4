<?php
function showImages($n) {
    // PHP array of animal names; each name matches a file in the images/ folder
    $animals = array("lion", "tiger", "elephant", "zebra", "panda");

    for ($i = 0; $i < $n && $i < count($animals); $i++) {
        $name = $animals[$i];
        echo "<img src='images/$name.jpg' alt='$name'>";
    }
}

$n = $_GET["n"];

echo "<div class='result'>";
showImages($n);
echo "</div>";
?>