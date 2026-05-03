<?php

$txt1 = "Learn PHP"; 

$txt2 = "W3Schools.com"; 

echo "<h2>$txt1</h2>"; 

echo "<p>Study PHP at $txt2</p>";

echo '<h2>' . $txt1 . '</h2>'; 

echo '<p>Study PHP at ' . $txt2 . '</p>';
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo"<br>";
$A="ASIF";
echo"$A\n";
echo"<br>";
$txt = "Hello world!";
$x = 5;
$y = 10.5;

  echo "I love " . $txt . "!";
echo"<br>";
  echo $x + $y;

echo"<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

echo $car["model"];

echo"<br>";

foreach ($car as $x => $y) {

  echo "$x: $y <br>";

}



?>