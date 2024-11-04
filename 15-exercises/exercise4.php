<?php
/*
Exercise 4. Create a php script that has 4 variables
, an array, a string, an integer and a boolean, print 
a message according of the data type of each variable*/

$array = ['hello', 'world'];
$string = 'This is a string';
$integer = 4;
$boolean = true;

echo "<h3>This variable contains a value of type: ". gettype($array)."</h3>";
echo "<h3>This variable contains a value of type: ". gettype($string)."</h3>";
echo "<h3>This variable contains a value of type: ". gettype($integer)."</h3>";
echo "<h3>This variable contains a value of type: ". gettype($boolean)."</h3>";


?>