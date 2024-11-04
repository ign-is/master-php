<?php

/*
    Create an array with this table content
    Action    Adventure   Sports
    GTA       Assasins      FIFA
    COD       Crash         PES
    PUGB      Prince        MOTO GP
*/

// include './sports.php';
// include './action.php';
// include './adventure.php';

$table = array(
    'Action' => ['GTA', 'COD', 'PUGB' ],
    'Adventure' => ['Assasin', 'Crash', 'Prince'],
    'Sports' => ['Fifa', 'PES', 'Moto GP']
);

$categories = array_keys($table);

?>

<table border="1">
    <?php require_once 'exercise5/headers.php'; ?>
    <?php require_once 'exercise5/first.php'; ?>
    <?php require_once 'exercise5/second.php'; ?>
    <?php require_once 'exercise5/third.php'; ?>
</table>