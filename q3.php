<?php
function showOdd($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

$n = $_GET["n"];

echo "<div class='result'>";
showOdd($n);
echo "</div>";
?>