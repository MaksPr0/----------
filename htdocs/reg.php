<?php
$page_title = "Регистрация";
$title = "Веб-технологии";
$content = file_get_contents("components/form_reg.php");
include("components/layout.php");
include("boot.php");
if (isset($_POST["login"]) and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    //require_once __DIR__.'/boot.php';
    $stmt = pdo()->query("INSERT INTO users(login, password) VALUES ('$login','$pas')");
    }
?>