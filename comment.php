<?php
include_once "database.php";
$cname = $_POST['cName'];
$cmessage = $_POST['cMessage'];
$cemail = $_POST['cEmail'];
$carticle = $_POST['articleId'];
$statement = $db->prepare("INSERT INTO comment (commentName, commentContent, commentEmail, commentArticle) VALUES (?, ?, ?, ?)");
$statement->execute(array($cname, $cmessage, $cemail, $carticle));
header("Refresh: 0; url=single.php?article=$carticle");
?>
