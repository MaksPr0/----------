<?php 
    session_start(); 
    require_once 'connect.php';  
     
    $login = $_POST['login']; 
    $password = $_POST['password']; 
    $password_confirm = $_POST['password_confirm']; 
    $check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'"); 
    if (mysqli_num_rows($check_user) === 0 ){
        if ($password === $password_confirm){
            $password = md5($password);
            mysqli_query($connect, "INSERT INTO users (`id`, login, `password`) VALUES (NULL, '$login', '$password')"); 
            header('Location: ../index.php'); 
     
        } else{ 
            $_SESSION['message'] = 'Пароли не совпадают'; 
            header('Location: ../register.php'); 
        } 
    } 
    else{
        $_SESSION['message'] = 'Пользователь с таким логином уже зарегистрирован'; 
            header('Location: ../register.php'); 
    }
    
?>