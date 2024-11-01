<?php

/*
Exercise 3. Write a program to display on screen the 
scuare roots (a number multiply by itself) of the 
first 40 natural numbers with a while loop.
*/

// $counter = 1;
// while ($counter <= 40) {
//     echo "<h3>".($counter * $counter)."</h3>";
//     $counter++;
// }

for ($i = 1; $i <= 40; $i++) {
    echo "<h3>The square root of $i is: ".($i * $i)."</h3>";
}

?>