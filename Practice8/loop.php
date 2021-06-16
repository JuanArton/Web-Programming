<?php

echo "While : <br>";
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br>";
echo "<br>";

echo "Do While : <br>";
$x = 2;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


echo "<br>";
echo "<br>";

echo "For : <br>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo "<br>";
echo "<br>";

echo "Foreach : <br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

echo "<br>";
echo "<br>";

echo "Break : <br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

echo "<br>";
echo "<br>";

echo "Continue : <br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
