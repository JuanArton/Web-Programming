<?php

echo "STRING :<br><br>";

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

echo "<br>";
echo "<br>";
echo "Integer :<br>";
$x1 = 5985;
var_dump($x1);

echo "<br>";
echo "<br>";
echo "Float :<br>";
$x2 = 10.365;
var_dump($x2);

echo "<br>";
echo "<br>";
echo "Array :<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";
echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
