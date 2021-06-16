<?php
$x = 5;
$y = 4;
$txt = "W3Schools.com";
echo "I love " . $txt . "! <br><br>";

echo $x + $y;

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
