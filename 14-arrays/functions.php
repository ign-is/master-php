<?php

$singers = ['Luis Miguel', 'Rick', 'Rock', 'Alfred'];
$numbers = [1, 2, 5, 8, 3, 4, 9];

// Sorts an indexed array in ascending order
sort($numbers);
echo '<pre>' , var_dump($numbers) , '</pre>';

echo '<br>';
// Add element to array
$singers[] = 'Tilo';
array_push($singers, 'Daft');

// Delete element from array 
array_pop($singers);
unset($singers[2]);

// Random
// array_rand() Returns one or more random keys from an array
$index = array_rand($singers);
echo $singers[$index];

// array_reverse() Returns an array in the reverse order
echo '<pre>' , var_dump(array_reverse($numbers)) , '</pre>';


// array_search() Searches an array for a given value and returns the key
$result = array_search('Alfred', $singers);
echo '<pre>' , var_dump($result) , '</pre>';

// count() Returns the number of elements in an array
// sizeof() 	Alias of count()
echo count($singers);
echo '<br>';
echo sizeof($singers);

?>