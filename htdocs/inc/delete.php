<?php 
session_start(); 
$id = $_GET['id']; 
require_once 'connect.php'; 
 
mysqli_query($connect, "DELETE FROM `tasklist` WHERE `id` = $id"); 
header("Location: profile.php")
    
?>