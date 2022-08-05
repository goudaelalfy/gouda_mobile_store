<?php

//declare(strict_types=1);

function sumTwoNumbers($num1, $num2) {
    
    $sum = $num1 + $num2;
    
    //echo $sum;
    
    return $sum;
}


$sum = sumTwoNumbers(5, 10);

echo '<br/>';
echo $sum-3;


echo '<br/>';
echo '<br/>';

function addNumbers(int $a, int $b) {
  //return $a + $b;
    
    return $a;
}

echo addNumbers(5, "5 days");


//  pass-by-reference
echo '<br/>';
echo 'pass-by-reference';
echo '<br/>';


function addFive(&$value) {
  $value += 5; // $value = $value + 5;
  return $value;
}

$num = 2;
$num_after_adding = addFive($num);

echo $num;
echo '<br/>';
echo $num_after_adding;