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

$x = "Hello world!";
$y = 'Hello world!';

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
//var_dump($gouda);
echo '<br/>---------------------------<br/>';


//Object, we will talk about it in OOP sessions



//Resource
/* 
In PHP, Resource  is a special data type that refers to any external resource. A resource variable acts as a reference to external source of data such as stream, file, database etc.
*/
$fp=fopen("index.php","w");
var_dump($fp);