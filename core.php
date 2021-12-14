<?php

// Declaring Variables:
$num1 = 10;
$num2 = 20;
$word1 = "Hello";
$word2 = "World";

// Displaying
echo $num1 + $num2;
echo "<br>";
echo $word1." ".$word2;

// Functions in PHP
echo "<br>";
function addNums($num1, $num2) {
    echo "<br>";
    echo $num1 + $num2;
}
function subNums($num1, $num2) {
    echo "<br>";
    echo $num2 - $num1;
}
addNums($num1, $num2);
subNums($num1, $num2);

echo "<br>";
echo "<br>";

// Classes In PHP
class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit();
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_color();



// Arrays in PHP
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
$string=implode(",",$cars);
echo $string;



?>