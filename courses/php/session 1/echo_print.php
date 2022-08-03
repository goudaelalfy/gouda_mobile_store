<?php

/*
 
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 
 echo can take multiple parameters (although such usage is rare) while print can take one argument. 
 echo is marginally faster than print

*/


echo "<h2>PHP is Fun!</h2>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

/*
echo "<br/>";
echo "<h2> $txt1 </h2>";
echo '<h2> $txt1 </h2>';
*/

// PHP won't use additional processing to interpret what is inside the single quote. when you use double quotes PHP has to parse to check if there are any variables within the string.




$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;




?>