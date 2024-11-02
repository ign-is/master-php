<?php

/*
Local variables are defined inside a function and it can not
be used outside the function, it is only available inside. Unless
we made a return.

Gobal variables are declared outside a function and 
they're available inside and outside a function.
*/ 

// Global Variable
$phrase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eos quas nihil aliquid ab quisquam molestiae iusto?";

echo $phrase;

function helloWolrd() {
    global $phrase;

    echo "<h1>$phrase</h1>";

    $year = 2024;
    echo "<h1>$year</h1>";
}

//echo $year; this doesn't work because it is a local varibale

helloWolrd();


// Variable Functions
function goodMorning() {
    return "<h1>Hello! good morning</h1>";
}

function goodEvening() {
    return "<h1>Hey!! how was the food?</h1>";
}

function goodNight() {
    return "<h1>Are you going to sleep now? good nights</h1>";
}

$schedule = 'Night';
$myFunction = "good".$schedule;
echo $myFunction();

?>