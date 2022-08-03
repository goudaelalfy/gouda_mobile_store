<?php

/*
 
PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
 
*/


// string

$age = 10;

$x = "Omar $age years old";
$y = 'Omar $age years old';

echo $x;
echo "<br>";
echo $y;

echo '<br/>---------------------------<br/>';

// int
$x = 5985;
var_dump($x);
echo '<br/>---------------------------<br/>';

// float
$x = 10.365;
var_dump($x);
echo '<br/>---------------------------<br/>';


// Boolean
$x = true;
$y = false;
echo '<br/>---------------------------<br/>';


// array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo '<br/>';
print($cars);
echo '<br/>';
print_r($cars);
echo '<br/>---------------------------<br/>';


// null
$x = "Hello world!";
$x = null;
var_dump($x);
var_dump($gouda);
echo '<br/>---------------------------<br/>';


//Object, we will talk about it in OOP sessions



//Resource
/* 
In PHP, Resource  is a special data type that refers to any external resource. A resource variable acts as a reference to external source of data such as stream, file, database etc.
*/
$fp=fopen("index.php","w");
var_dump($fp);



// PHP is a Loosely Typed Language or Dynamically Typed Language

// what is the difference between statically typed and dynamically typed languages?
/*
 
 A programming language is statically typed if the type of a variable is known at compile time. A language is dynamically typed if the type of a variable is checked during run-time.  
 
 Some examples of statically-typed languages are Java, C, C++, C#, Swift, Scala, Kotlin, Fortran, Pascal, Rust, Go, COBOL, etc.

 Most modern programming languages are dynamically typed. Some examples of dynamically-typed languages are Python, Javascript, Ruby, Perl, PHP, R, Dart, Lua, Objective-C, etc. 
 
 */

// What is the difference between compiler or interpreter?
/*
 
 C, C++, C#, Java are compiler-based programming languages 

 PHP, PERL, Ruby are interpreter-based programming languages
 
 */