<?php

$arr_1 = array('1', '2', '3');
$arr_2 = ['1', '2', '3', '5', '7'];


function countElement($arr) {
    
    $count = 0;
    foreach($arr as $val) {
        $count++; // $count = $count + 1;
    }
    
    return $count;
}


$arr_1_count = countElement($arr_1);
$arr_2_count = countElement($arr_2);

echo $arr_1_count;
echo '<br/>';
echo $arr_2_count;


