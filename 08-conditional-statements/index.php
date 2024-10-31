<?php

// if else

// Comparison Operators
/*
== 	Equal
=== 	Identical
!= 	Not equal
<> 	Not equal
!== Not identical
> 	Greater than
< 	Less than
>= 	Greater than or equal to
<= 	Less than or equal to
*/

// Logical Operators
/*
&& AND
|| OR
! NOT
and, or 
*/

// Example 1
$color = 'green';

if ($color == 'red') {
    echo 'color is red';
} else {
    echo 'color is NOT red';
}

echo '<br>';

// Example 2
$year = 2024;
if ($year == 2024) {
    echo "We're in 2024";
} else {
    echo "We're not in 2024";
}

// Example 3
$name = 'Juan Doe';
$city = 'Madird';
$continent = "Asia";
$age = 49;
$legal_age = 18;

if ($age >= $legal_age) {
    echo "<h1>$name is on legal age</h1>";

    if ($continent == 'Europe') {
        echo "<h2>and he is from $city</h2>";
    } else {
        echo "He's not european";
    }
} else {
    echo "<h2>$name is not on legal age</h2>";
}

echo '<hr>';

// Example 4
$day = 3;

if ($day == 1) {
    echo 'Monday';
} elseif ($day == 2) {
    echo 'Tuesday';
} elseif ($day == 3) {
    echo 'Wednesday';
} elseif ($day == 4) {
    echo  'Thursday';
} elseif ($day == 5) {
    echo 'Friday';
} else {
    echo "It's Weekend!";
}

echo '<hr/>';

// Switch
$day = 6;

switch ($day) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    default:
        echo 'It is Weekend';
}

echo '<hr/>';

// Example 5
$age1 = 18;
$age2 = 64;
$official_age = 20;

if ($official_age >= $age1 && $official_age <= $age2) {
    echo "He is of working age";
} else {
    echo "He can not work";
}

echo '<hr>';

$country = 'Mexico';
if ($country == 'Mexico' || $country == 'Spain' || $country == 'Colombia') {
    echo 'Spanish is spoken in these countries';
} else {
    echo 'Spanish is not spoken';
}

echo '<br>';

// GOTO
goto execute_this;
echo "<h3>Instruction 1</h3>";
echo "<h3>Instruction 2</h3>";
echo "<h3>Instruction 3</h3>";
echo "<h3>Instruction 4</h3>";

execute_this: 
echo "<h1>I have jumped 4 echoes</h1>"
  


?>