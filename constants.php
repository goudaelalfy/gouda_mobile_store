<?php

// Create a constant with a case-sensitive name:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// Create a constant with a case-sensitive name:
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;


//In PHP7, you can create an Array constant using the define() function.

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

?>