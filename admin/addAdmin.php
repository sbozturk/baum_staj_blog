<?php
include_once "../database.php";
$name = $_POST['userName'];
$surname = $_POST['userSurname'];
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];
$statement = $db->prepare("INSERT INTO user (userName,userSurname, userEmail, userPassword) VALUES (?, ?, ?, ?)");
$statement->execute(array($name, $surname, $email, $password));
echo $name." added to database.";
header("Refresh: 1; url=index.php");
?>
