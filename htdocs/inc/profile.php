<?php 
    session_start(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>TO DO LIST</title> 
    <link rel = "stylesheet" href = "../css/style.css">
    <link rel="shortcut icon" href="../img/icon.jpg" type="image/png"> 
</head> 
<body>
<a style = "margin-left: 90%;"href = "logout.php" class = "logout">Выйти из аккаунта</a> 
    <form  action = "addtask.php" method = "post"> 
        <h2 style = "text-align: left;" ><?= $_SESSION['user']['login'] ?></h2> 
        <br> 
        <input  type = "text" name = "task" placeholder = "Введите задачу"> 
        <input  type = "text" name = "type" placeholder = "Введите тип задачи">
        <input type="date" name = "dateend" атрибуты> 
        <br> 
        <button>Добавить</button>    
        <?php 
        //ini_set('display_errors', 'off'); 
        $pdo = new PDO("mysql:host=localhost;dbname=to do list", "root",""); 
         
 
        $user_id = $_SESSION['user_id']; 
        echo '<ul>'; 
        $query = $pdo->query("SELECT * FROM tasklist WHERE user_id = '$user_id'"); 
        while ($row = $query->fetch(PDO::FETCH_OBJ)){ 
            echo '<li><b>'."Название: ".$row->task.'</br>'. "Тип: ".$row->type. '</br>'."Дедлайн: ".$row->dateend.'</br></b</br>';
        } 
        echo '</ul>'; 
     ?> 
 
    </form> 
</body> 
</html>