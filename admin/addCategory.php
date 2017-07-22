<?php
include_once "../database.php";
$name = $_POST['categoryName'];
$statement = $db->prepare("INSERT INTO category (categoryName) VALUES (?)");
$statement->execute(array($name));
echo $name." added to database.";
header("Refresh: 1; url=index.php");
?>
