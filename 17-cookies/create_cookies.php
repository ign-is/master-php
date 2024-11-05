<?php

/*
 What is a Cookie?

A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
*/

// Create cookie
// setcookie('name', 'value that only can be text', expire, path/ruta, domain)

// Basic cookie
setcookie('mycookie','value of my cookie' );

// Cookie with expiration
setcookie('oneyear', 'value of this cookie of 365 days', time()+(60*60*24*365));

header('Location:see_cookies.php');
?>

