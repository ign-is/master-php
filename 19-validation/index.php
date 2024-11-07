<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>
    <h1>PHP Form Validation</h1>

    <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];

            if ($error == 'values_are_missing') {
                echo '<strong style="color:red">Insert all data in all fields of the form</strong>';
            }

            if ($error == 'name') {
                echo '<strong style="color:red">Enter name correctly</strong>';
            }

            if ($error == 'surname') {
                echo '<strong style="color:red">Enter surname correctly</strong>';
            }

            if ($error == 'age') {
                echo '<strong style="color:red">Enter age correctly</strong>';
            }

            if ($error == 'email') {
                echo '<strong style="color:red">Email is incorrect</strong>';
            }

            if ($error == 'password') {
                echo '<strong style="color:red">Password is incorrect</strong>';
            }

            
        }
    ?>

    <form  method="POST" action="form_process.php">
        <label for="name">Name</label><br>
        <input type="text" name="name" required="required" pattern="[A-Za-z]+"><br>

        <label for="surname">Surname</label><br>
        <input type="text" name="surname" required="required" pattern="[A-Za-z]+"><br>

        <label for="age">Age</label><br>
        <input type="number" name="age" required="required" pattern="[0-9]+"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" required="required"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" required="required" minlength="5"><br>

        <input type="submit" value="Send" />
    </form>
</body>
</html>