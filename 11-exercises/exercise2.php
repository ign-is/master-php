<?php

/*
Exercise 2. Write a script with PHP that display on
screen all the even numbers that there are from 1 to 100
*/

$number = 1;
// while ($number <= 100) {
//     if ($number % 2 == 0) {
//         echo "<h3>$number</h3>";
//     }
//     $number++;
// }

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<h3>$i</h3>";
    }
} 

?>