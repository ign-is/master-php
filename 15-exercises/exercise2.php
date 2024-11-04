<?php

/* 
Exercise 2: write a program with PHP that adds values to an 
array as long as its length is less than 120 and then 
show it on the screen.
*/

$array = [];
function addValues($array) {
    for ($i = 0; $i < 120; $i++) {
        $array[] = rand(1, 120);
    }

    return $array;
}


echo '<pre>' , var_dump(addValues($array)) , '</pre>';














?>