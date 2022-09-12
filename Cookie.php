<?php


$cookie_name = "user_fullname";
$cookie_value = "Gouda Elalfy";

setcookie($cookie_name, $cookie_value, time() + 60*60*24 , "/");


if(!isset($_COOKIE[$cookie_name])) {
      
    echo "No Cookie set";
      
      header("Location: ".$_SERVER["PHP_SELF"]);

} else {
    echo $_COOKIE[$cookie_name];
}




// to delete cookie set the expiration date to one hour ago
setcookie("user_fullname", "", time() - 3600);