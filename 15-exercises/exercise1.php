<?php

/*
Make a program in PHP that has an array with 
8 numbers.

-1 iterate and display on screen
-2 order it and dsplay on screen
-3 display its lenght
-4 search for some element in the array (find it by URL parameter)
*/

$numbers = array(1, 2, 5, 4, 3, 7, 6, 8);

function displayArray($numbers) {
    $unorderedList = "";
    $unorderedList .= "<uls style='list-style: none'>";

    foreach ($numbers as $number) {
        $unorderedList .= "<li>".$number."</li>";
    }
    $unorderedList .= "</ul>";
    $unorderedList .= "<hr/>";
    $unorderedList .= "<br/>";

    return $unorderedList;
}


//1
// echo "<uls style='list-style: none'>";

// foreach ($numbers as $number) {
//     echo "<li>".$number."</li>";
// }

// echo "</ul>";
// echo "<hr/>";
// echo "<br/>";
echo displayArray($numbers);

//2
sort($numbers);
// echo "<uls style='list-style: none'>";

// foreach ($numbers as $number) {
//     echo "<li>".$number."</li>";
// }

// echo "</ul>";
// echo "<hr/>";
// echo "<br/>";
echo displayArray($numbers);

// 3
echo "<h3>The lenght of this array is: ".count($numbers);
echo "<hr/>";
echo "<br/>";

//4
$urlParameter = $_GET['num'];
$result = array_search($urlParameter, $numbers);
echo $result;

?>