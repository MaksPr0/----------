<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    $link = mysqli_connect('127.0.0.1','root', '');
    $StudentsDataTab = mysqli_select_db($link, 'StudentsDataTab');
    mysqli_query($link, "INSERT INTO StudentsDataTable (Name, )
    VALUES ('$name', '$password')");
    mysqli_close($link);
?>