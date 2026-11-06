<?php
// 4(i) sort numbers
function sortNumbers($text) {
    $arr = explode(",", $text);   // "5,2,9" becomes [5, 2, 9]
    sort($arr);                   // PHP's built-in sort
    echo implode(", ", $arr);     // joins the array back into a string
}

// 4(ii) show N animal names
function showAnimals($n) {
    $animals = array("Lion", "Tiger", "Elephant", "Zebra", "Giraffe",
                     "Panda", "Monkey", "Bear", "Wolf", "Deer");
    for ($i = 0; $i < $n && $i < count($animals); $i++) {
        echo ($i + 1) . ". " . $animals[$i] . "<br>";
    }
}

$type = $_GET["type"];

echo "<div class='result'>";
if ($type == "sort") {
    sortNumbers($_GET["nums"]);
} else {
    showAnimals($_GET["n"]);
}
echo "</div>";
?>