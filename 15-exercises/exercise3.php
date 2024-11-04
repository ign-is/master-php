<?php

/*
Exercise 3. Write a program that checks if a variable 
is empty, fill it with text in lowercase and show it 
in bold appercase.
*/
$variable = "";

if(empty($variable)) {
    $variable = 'lowercase text to uppercase';
    echo "<b>".strtoupper($variable)."<b/>";
}




?>