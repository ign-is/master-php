<?php

$file = $_FILES['file'];
$name = $file['name'];
$type = $file['type'];

if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {

    if(!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($file['tmp_name'], 'images/'.$name);

    header("Refresh: 5; URL=index.php");
    echo "<h2>File uploaded correctly</h2>";

} else {
    header("Refresh: 5; URL=index.php");
    echo "<h1>Upload an image with the correct format</h1>";
}


?>