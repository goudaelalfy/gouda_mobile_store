<?php

//declare(strict_types=1);

function sumTwoNumbers($num1 = 1, $num2=1) {
    
    $sum = $num1 + $num2;
    
    echo $sum;
    
    return $sum;
}


$sum = sumTwoNumbers(5, 10);

echo '<br/>';
echo $sum-3;


echo '<br/>';
echo '<br/>';

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");


//  pass-by-reference
echo '<br/>';
echo 'pass-by-reference';
echo '<br/>';

function addFive(&$value) {
  $value += 5;
}

$num = 2;
addFive($num);
echo $num;