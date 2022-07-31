<?php


// if else
$balance = 1000;

$order_toal = 500;

if($balance >= $order_toal) {
    echo 'order done';
} else {
    echo 'you don not have enough balance';
}

echo '<br/>---------------------------<br/>';



// switch
$favcolor = "red";


switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo '<br/>---------------------------<br/>';


// for loop
for ( $x = 10; $x >= 1; $x--) {
  echo "The number is: $x <br>";
}
echo '<br/>---------------------------<br/>';


// foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if($x=='blue') {
        echo "$x <br>";
    }
    
    if($x=='yellow') {
        echo "$x <br>";
    }
}
echo '<br/>---------------------------<br/>';


// while loop
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo '<br/>---------------------------<br/>';

// do while loop
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo '<br/>---------------------------<br/>';


// break statement
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo '<br/>---------------------------<br/>';

// continue statement
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}