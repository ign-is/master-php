<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printing on screen - Master PHP</title>
</head>
<body>
    <h1>Master <?php echo 'PHP'; ?></h1>

    <?='Welcome to the biggest php course'?>

    <?php
        // Section title
        echo '<h3>List of videogames:</h3>';

        /*
            This is a list 
            of modern 
            video games
        */
        echo '<ul>'
             . '<li>GTA</li>'
             . '<li>Fifa</li>'
             . '<li>Mario Bros</li>'
             . '</ul>';

        // echo '<br>Hello hello hello</br>;

        // Explanatory paragraph
        echo '<p>This is the entire' . ' - ' . 'list of games';
    ?>
</body>
</html>