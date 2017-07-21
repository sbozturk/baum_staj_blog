<?php
include_once "../database.php";
$name = $_POST['articleName'];
$content = $_POST['articleContent'];
$tag = $_POST['articleTag'];
$category = $_POST['articleCategory'];
$statement = $db->prepare("INSERT INTO article (articleName,articleContent, articleTag, articleCategory) VALUES (?, ?, ?, ?)");
$statement->execute(array($name, $content, $tag, $category));
echo $name." veritananı eklendi.";
header("Refresh: 1; url=index.php");
?>
