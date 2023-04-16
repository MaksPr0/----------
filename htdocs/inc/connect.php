<?php 
    $connect = mysqli_connect('localhost', 'root', '', 'to do list'); 
 
    if (!$connect){ 
        die('Error connect to DataBase'); 
    } 
?>