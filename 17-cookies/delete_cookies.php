<?php

if ($_COOKIE['mycookie']) {
    unset($_COOKIE['mycookie']);
    setcookie('mycookie','', time()-100);
}

header('Location:see_cookies.php');

?>