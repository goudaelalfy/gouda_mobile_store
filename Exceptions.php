<?php

function divideNumOn($number, $on) {
  
  if($on == 0) {
    throw new Exception("Division by zero");
  }
  
  return $number / $on;
}

//echo divideNumOn(5, 0);


try {
  echo divideNumOn(5, 0);
} catch(Exception $ex) {
    
   $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  
  echo "Hello My Dear, Unable to divide.";
  echo '<br/>';
  echo $ex->getMessage();
  
} finally {
    echo '<br/>';
  echo 'always run';
}