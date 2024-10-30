<?php 

// Arithmetic Operators
$number1 = 55;
$number2 = 33;

echo 'Addition: '.($number1+$number2).'<br/>';
echo 'Substraction: '.($number1-$number2).'<br/>';
echo 'Multiplication: '.($number1 * $number2).'<br/>';
echo 'Division: '.($number1/$number2).'<br/>';
echo 'Modulus: '.($number1%$number2).'<br/>';

//  Increment / Decrement Operators
$year = 2019;

// Increment
// $year = $year + 1;
$year++;

// Decrement
// $year = $year -1;
$year--;

// Pre-increment
// $year = 1 + $year;
++$year;

// Pre-decrement
// $year = 1 - $year;
--$year;

echo "<h1>$year</h1>";

// Assignment Operators
$age = 55;

echo $age.'<br>';

// $age = $age + 5;
echo ($age+=5);



?>