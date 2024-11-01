<?php
/*
Exercise 4 Grab two numbers from the URL
with (GET) and do the basic operations of a 
caltulator (addition, substraction, division, multiplication) 
of those two numbers
*/


if (isset($_GET['number1']) && isset($_GET['number2'])) {

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    echo "<h1>Calculator</h1>";
    echo "Addition: ".($number1+$number2)."<br/>";
    echo "Substraction: ".($number1-$number2)."<br/>";
    echo "Multiplication: ".($number1*$number2)."<br/>";
    echo "Division: ".($number1/$number2);

} else {
    echo "<h1>Introduce the correct values for URL</h1>";
}



// My solution
/*
$number1 = 10;
$number2 = 20;

echo ($_GET['number1'] + $_GET['number2'])."<br>"; 
echo ($_GET['number1'] - $_GET['number2'])."<br>"; 
echo ($_GET['number1'] / $_GET['number2'])."<br>"; 
echo ($_GET['number1'] * $_GET['number2'])."<br>"; 
*/
?>