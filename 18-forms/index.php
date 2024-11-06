<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Forms</title>
</head>
<body>
    <h1>Form</h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Name: </label> 
        <p><input type="text" name="name" /></p>

        <label for="surname">Surname: </label> 
        <p><input type="text" name="surname" /></p>
        
        <label for="button">button: </label> 
        <p><input type="button" name="button" value="Click me"/></p>
        
        <label for="gender">Gender: </label> 
        <p>
           Man: <input type="checkbox" name="gender" value="man" checked="checked" />
           Woman: <input type="checkbox" name="gender" value="woman" />
        </p>

        <label for="color">Color: </label> 
        <p><input type="color" name="color" /></p>
        
        <label for="date">Date: </label> 
        <p><input type="date" name="date" /></p>
        
        <label for="email">Email: </label> 
        <p><input type="email" name="email" placeholder="email"/></p>
        
        <label for="file">File: </label> 
        <p><input type="file" name="file" multiple="multiple" /></p>

        <label for="number">Number: </label> 
        <p><input type="number" name="number" /></p>

        <label for="password">Password: </label> 
        <p><input type="password" name="password" /></p>

        <label for="continent">Continent: </label> 
        <p>
            America: <input type="radio" name="continent" value="America" />
            Europe: <input type="radio" name="continent" value="Europe" />
            Asia: <input type="radio" name="continent" value="Asia" />
        </p>

        <label for="web">Web: </label> 
        <p><input type="url" name="web" /></p>

        <textarea name="" id=""></textarea><br>

        <section name="movies">
            <option value="Spiderman">Spiderman</option>
            <option value="Batman">Batman</option>
            <option value="Joker">Joker</option>
        </section>

        <input type="submit" value="Send">
    </form>

</body>
</html>
<?php



?>