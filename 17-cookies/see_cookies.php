<?php


/*
To show the value of the cookies, we have to use
the superglobal $_COOKIE, it is an associative array.
*/

if (isset($_COOKIE['mycookie'])) {
    echo "<h1>".$_COOKIE['mycookie']."</h1>";
} else {
    echo "That cookie does not exist";
}

if (isset($_COOKIE['oneyear'])) {
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
} else {
    echo "That cookie does not exist";
}

?>

<a href="create_cookies.php">Create my Cookies</a>
<a href="delete_cookies.php">Delete my Cookies</a>