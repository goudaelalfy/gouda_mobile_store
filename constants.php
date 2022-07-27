<?php

// Create a constant with a case-sensitive name:

define("datbase_host", "localhost");
define("datbase_username", "root");
define("datbase_password", "Ahmed");

echo datbase_password;

// Create a constant with a case-sensitive name:
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;


//In PHP7, you can create an Array constant using the define() function.

define("gender", [
  "male",
  "female"
]);
echo gender[0];

?>