<?php

if(!is_dir('my_directory')) {
    mkdir('my_directory', 0777) or die('directory can not be created');
} else {
    echo 'Directory already exist';
}

//rmdir('my_directory');

/*
if($gestor = opendir('./my_directory')) {
    while(false !== ($directory = readdir($gestor))) {
        echo $directory."<br/>";
    }
}


This PHP code is listing the files and directories in the current directory (`./my_directory`). Here's a breakdown:

1. `if($gestor = opendir('./my_directory')) { ... }`: This block opens the directory handle with `opendir()` and assigns it to the variable `$gestor`. If the directory is successfully opened, it executes the code within the curly braces.

2. `while(false !== ($directory = readdir($gestor))) { ... }`: This loop reads the directory entries one by one using `readdir()` and assigns them to the variable `$directory`. It continues to execute as long as there are directory entries to read.

3. `echo $directory."<br/>";`: This line prints the name of each directory entry. The `<br/>` tag is used to create a line break, ensuring each entry appears on a new line.

In summary, this code snippet reads and prints the names of files and directories located in './my_directory'.
*/

echo "<br/>";
if($gestor = opendir('./my_directory')) {
    while(false !== ($directory = readdir($gestor))) {
        if($directory != '.' && $directory != '..') {
            echo $directory."<br/>";
        }
    }
}


?>