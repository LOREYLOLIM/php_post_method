<?php

$connection = mysqli_connect('localhost', 'root', '', 'post');

if ($connection){
    echo 'successfully connected';
}else{
    die(mysqli_error($connection));
}

?>