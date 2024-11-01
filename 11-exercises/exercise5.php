<?php
/*
Exercise 5. Write a program that shows all the numbers
between two numbers that arrive by the URL($_GET)
*/
if (isset($_GET['number1']) && isset($_GET['number2'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    if ($number1 > $number2) {
        echo "<h1>The first number has to be greater than the second one</h1>";
    } else {
        for ($i = $number1 + 1; $i < $number2; $i++) {
            echo "<h3>$i</h3>";
        }
    }

} else {
    echo "<h1>Insert two numbers by URL</h1>";
}

?>