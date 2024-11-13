<?php
/*
Exercise 3. Create an User Interface (form) with
two inputs and four buttons for adding, substracting,
dividing and multiplication.
Show the result on screen.
*/

$result = false;

if(isset($_POST['n1']) && isset($_POST['n2'])) {

    if(isset($_POST['add'])) {
        $result = "The result is: ".($_POST['n1'] + $_POST['n2']);
    }

    if(isset($_POST['sub'])) {
        $result = "The result is: ".($_POST['n1'] - $_POST['n2']);
    }
    
    if(isset($_POST['multiply'])) {
        $result = "The result is: ".($_POST['n1'] * $_POST['n2']);
    }
    
    if(isset($_POST['divide'])) {
        $result = "The result is: ".($_POST['n1'] / $_POST['n2']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form action="" method="POST">
        <label for="n1">Number 1</label>
        <input type="number" id="n1" name="n1" />
        <br><br>

        <label for="n2">Number 2</label>
        <input type="number" id="n2" name="n2" />
        <br><br>

        <input type="submit" value="add" name="add" />
        <input type="submit" value="substract" name="sub" />
        <input type="submit" value="multiply" name="multiply" />
        <input type="submit" value="divide" name="divide" />
    </form>

    <?php
        // Result
        if ($result != false):
            echo "<h2>".$result."</h2>";
        endif;
    ?>
</body>
</html>