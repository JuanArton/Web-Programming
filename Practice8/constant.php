<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";
echo "<br>";

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

echo "<br>";
echo "<br>";

function myTest() {
  echo GREETING;
}
 
myTest();
?>
