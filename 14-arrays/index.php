<?php

$movie = "Batman";
$movies = array('Batman', 'Spiderman', 'Lord of the rings');
$singers = ['Luis Miguel', 'Rick', 'Rock'];

// Associative array
$persons = array(
    'name' => 'Roman',
    'surname' => 'Emperor',
    'web' => 'roman-emperor.com'
);

echo $persons['surname'];

echo '<br>';

var_dump($movies[1]);
echo '<br/>';

var_dump($singers);
echo '<br/>';

echo $movies[0];
echo '<br/>';
echo $singers[2];

// for
echo "<h1>List of movies</h1>";

echo "<ul>";
for ($i = 0; $i < count($movies); $i++) {
    echo "<li>".$movies[$i]."</h1>";
}
echo "</ul>";

// foreach
echo "<h1>List of singers</h1>";

echo "<ul>";
foreach ($singers as $singer) {
    echo "<li>".$singer."</li>";
}
echo "</ul>";


// Multidimensional Arrays
$contacts = array(
    array(
        'name' => 'Luis',
        'email' => 'luis@email.com'
    ),
    array(
        'name' => 'Mike',
        'email' => 'mike@email.com'
    ),
    array(
        'name' => 'Philip',
        'email' => 'philip@email.com'
    )
);

//echo '<pre>' , var_dump($contacts) , '</pre>';
echo $contacts[2]['email'];
echo '<br>';

foreach ($contacts as $key => $contact) {
    var_dump($contact['name']);
    echo '<br>';
}



?>