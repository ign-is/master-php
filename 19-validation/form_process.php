<?php
$error = 'values_are_missing';

if (!empty($_POST['name']) && !empty($_POST['surname']) &&
!empty($_POST['age']) && !empty($_POST['email']) && 
!empty($_POST['password'])) {
    $error = 'ok';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = (int) $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate name
    if (!is_string($name) || !preg_match("/[a-zA-z ]+/", $name)) {
        $error = 'name';
    }

    // Validate surname
    if (!is_string($surname) || !preg_match("/[a-zA-z ]+/", $surname)) {
        $error = 'surname';
    }

    // Validate age
    if (!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)) {
        $error = 'age';
    }

    // Validate email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
 
    // Validate password
    if (empty($password) || strlen($password) < 5) {
        $error = 'password';
    }


} else {
    $error = "values_are_missing";
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Processing</title>
</head>
<body>
    <?php if($error == 'ok'): ?>
    <h1>Successfully Validated Data</h1>
        <p><?=$name?></p>
        <p><?=$surname?></p>
        <p><?=$age?></p>
        <p><?=$email?></p>
     <?php endif; ?>   
</body>
</html>