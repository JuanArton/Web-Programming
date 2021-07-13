<?php

echo "preg_match : <br>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1

echo "<br>";
echo "<br>";

echo "preg_match all : <br>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4

echo "<br>";
echo "<br>";

echo "preg_replace : <br>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

?>