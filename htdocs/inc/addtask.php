<?php 
    session_start(); 
    require_once 'connect.php';  
    $user_id = $_SESSION['user_id']; 
     
 
    $task = $_POST['task']; 
    $dateend = $_POST['dateend'];
    $type = $_POST['type'];
    if ($task != ""){ 
    mysqli_query($connect, "INSERT INTO `tasklist`(`id`, `user_id`, `task`, `type`, `dateend`) VALUES ('NULL','$user_id','$task','$type','$dateend')"); 
    } 
    header('Location: profile.php'); 
 
?>