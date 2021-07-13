<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function


echo "<br>";
echo "<br>";

echo "function arguments : <br>";
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

?>