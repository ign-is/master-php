<?php
/*
Exercise 2
1 Create a function
2 Validate an email with filter_var
3 Collect variable by get and validate it
4 Show results
*/

function validateEmail($email) {
    $status = 'Not valid';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = 'Valid';
    }
    return "<h1>".$status."</h1>";
}

if (isset($_GET['email'])) {
    echo validateEmail($_GET['email']);
} else {
    echo 'Pass an email for get...';
}

?>