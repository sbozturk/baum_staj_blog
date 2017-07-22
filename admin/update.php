<?php
include_once "../database.php";
$id =  $_POST['articleId'];
$name = $_POST['articleName'];
$content = $_POST['articleContent'];
$tag = $_POST['articleTag'];
$category = $_POST['articleCategory'];
$query = $db->query("UPDATE article SET articleName=$name, articleContent=$content, articleTag=$tag, articleCategory=$category WHERE aid=$id)");
echo $name." updated.";
header("Refresh: 30; url=index.php");
?>
