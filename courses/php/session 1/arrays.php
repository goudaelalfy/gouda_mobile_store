<?php

/*
 
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays 
 
 */


// Indexed

$gender_arr_indexed = array('male', 'female');
$gender_arr_indexed = ['male', 'female'];

echo "I like " . $gender_arr_indexed[0] . ", " . $gender_arr_indexed[1];

echo '<br/>';

// Associative
$gender_arr_associative = array(
    'male' => 'ذكر', 
    'female' => 'انثى'
    );
echo $gender_arr_associative[0] .' - '.$gender_arr_associative[1];

echo '<br/>';

// Multidimensional
$cars = array (
  'vol'=>array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

