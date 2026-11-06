<?php
function showFeedback() {
    $name     = $_POST["username"];
    $password = $_POST["password"];
    $rating   = $_POST["rating"];
    $topic    = $_POST["topic"];
    $hidden   = $_POST["formid"];

    // save the uploaded file into the uploads folder
    $filename = $_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"], "uploads/" . $filename);

    echo "<div class='result'>";
    echo "<b>Name:</b> $name<br>";
    echo "<b>Password:</b> " . str_repeat("*", strlen($password)) . "<br>";
    echo "<b>Rating:</b> $rating<br>";
    echo "<b>Topic:</b> $topic<br>";
    echo "<b>File uploaded:</b> $filename<br>";
    echo "<b>Hidden value:</b> $hidden";
    echo "</div>";
}

showFeedback();
?>