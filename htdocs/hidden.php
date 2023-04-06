<?php
$page_title = "Секретная страница";
$title = "Веб-технологии";

require_once __DIR__.'/boot.php';
$sql = "SELECT * FROM users";
$stmt = pdo()->query($sql);
while ($row = $stmt->fetch())
{
    $content = $content . $row['id'] . " | " . $row['login'] . " | " . $row['password'] . "<br/>";
}


include("components/layout.php");
?>