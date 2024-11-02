<?php

// Example 1
function showNames() {
    echo "Jhon Doe <br/>";
    echo "Jhonatan Does <br/>";
    echo "Juan Domingo<br/>";
    echo "Joe Dhon<br/>";
    echo "<hr/>";
}

// invoque function
/*
showNames();
showNames();
showNames();
*/

// Example 2
function table($number) {
    echo "<h3>Multiplication table of the number: $number</h3>";

    for($i = 1; $i <= 10; $i++) {
        $operation = $number * $i;
        echo "$number x $i = $operation <br/>";
    }

}

/*
if(isset($_GET['number'])) {
    table($_GET['number']);
} else {
    echo "There is no number to show the table";
}
*/

/*
for($i = 0; $i <= 10; $i++) {
    table($i);
}
*/

// Example 3
function calculator($number1, $number2, $bold = false) {
    $add = $number1 + $number2;
    $substraction = $number1 - $number2;
    $multiplication = $number1 * $number2;
    $division = $number1 / $number2;

    $string_text = "";

    if ($bold) {
        $string_text .= "<h1>";
    }

    $string_text .= "Addition: $add <br/>";
    $string_text .= "Substraction : $substraction <br/>";
    $string_text .= "Multiplication: $multiplication <br/>";
    $string_text .= "Division: $division <br/>";
    $string_text .= "<hr/>";

    if ($bold) {
        $string_text .= "</h1>";
    }

    $string_text .= "</hr>";

    return $string_text;
}

echo calculator(10, 30);
/*
calculator(12, 35, true);
calculator(15, 32, false);*/


// Example 4

function getName($name) {
    $text = "The name is: $name";
    return $text;
}

function getSurName($surname) {
    $text = "The surname is: $surname";
    return $text;
}

function returnTheName($name, $surname) {
    $text = getName($name)
            ."<br/>".
            getSurName($surname);
    return $text;
}

echo returnTheName("Victorious", "Hitman");
//echo getName("Matri");
?>