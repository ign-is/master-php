<?php

// Debug
$name = "Roman Emperor";
var_dump($name);
echo "<br/>";

// Date
echo date('d-m-Y');

echo "<br/>";
echo time();

// Maths
echo "<br/>";
echo "Square root of: ".sqrt(10);

echo "<br/>";
echo "Random number between 10 and 40: ".rand(10, 40);

echo "<br/>";
echo "Number PI".pi();

echo "<br/>";
echo "Round :".round(7.8789);

// More general functions
echo "<br/>";
echo gettype($name);

// Detect type
echo "<br/>";
if (is_string($name)) {
    echo 'That variable is a string';
}

echo "<br/>";
if (!is_float($name)) {
    echo 'The variable name is not a float';
}

// Check if a variable exist
echo "<br/>";
if (isset($name)) {
    echo "That variable exist";
} else {
    echo "That variable does not exist";
}

// Trimp spaces
echo "<br/>";
$phrase = "      my content     ";
var_dump(trim($phrase));


// Delete variables / indexes
$year = 2020;
unset($year);

// Check if the variable is empty
echo "<br/>";
$text = true;
if (empty($text)) {
    echo "The variable text is empty";
} else {
    echo "The variable text HAS CONTENT";
}

// Count characters from a string
echo "<br/>";
$string = "12345";
echo strlen($string);


// Find character
echo "<br/>";
$phrase = "Life is beautiful";
echo strpos($phrase, 'is');

// Replace word from a string
echo "<br/>";
$phrase = str_replace("Life", "Motorcicle", $phrase);
echo $phrase;

// Uppercase and Lowercase
echo "<br/>";
echo strtoupper($phrase);
echo "<br/>";
echo strtolower($phrase);
?>