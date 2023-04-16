<?php 
session_start(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>TO DO LIST</title> 
 <link rel = "stylesheet" href = "css/style.css"> 
 <link rel="shortcut icon" href="/img/icon.jpg" type="image/png">
</head> 
<body> 
<header>
      <div>
         <h2 style = "color:white;">TO DO LIST </h2>
      </div>
</header>
 <form action = "inc/signup.php" method = "post"> 
  <label>Логин</label> 
  <input type = "text" name = "login" placeholder = "Введите логин"> 
  <label>Пароль</label> 
  <input type = "password" name = "password" placeholder = "Введите пароль"> 
        <label>Подтвердите пароль</label> 
  <input type = "password" name = "password_confirm" placeholder = "Введите пароль"> 
  <button>Зарегистрироваться</button> 
  <p> 
   У вас уже есть аккаунт? - <a href = "index.php">Войдите</a>! 
  </p> 
  <?php 
  ini_set('display_errors', 'off'); 
  if ($_SESSION['message']){ 
    echo '<p class = "msg">'. $_SESSION['message'] .' </p>'; 
   }  
    unset($_SESSION['message']); 
     ?> 
  </form> 
 
</body> 
</html>