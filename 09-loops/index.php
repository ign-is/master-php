<?php 

// while loop
$number = 0;

while ($number <= 100) {
    echo $number;

    if ($number != 100) {
        echo ", ";
    }

    $number++;
}

echo "<hr>";

// Ejemplo
if (isset($_GET['number'])) {
    // change data type
    $number = (int)$_GET['number'];
} else {
    $number = 1;
}

echo "<h1>Multiplication table of the number $number</h1>";

$counter = 1;
while ($counter <= 10) {
    echo "$number x $counter = ".($number*$counter)."<br>";
    $counter++;
}

echo '<hr>';

// do while

$age = 17;
$counter = 1;

do {
    echo "You have access to the private local $counter <br>";
    $counter++;
} while ($age >= 18 && $counter <= 10);
?>