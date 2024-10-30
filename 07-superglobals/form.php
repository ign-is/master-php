<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <h1>PHP Form</h1>
    <form method="POST" action="receive.php">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </p>

        <p>
            <label for="surname">Surname:</label>
            <input type="text" name="surname">
        </p>

        <input type="submit" value="Send Data">
    </form>
</body>
</html>