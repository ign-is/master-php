<?php

session_start();

// echo $normal_variable;  <= it doesn't work

echo $_SESSION['persistent_variable'];
?>