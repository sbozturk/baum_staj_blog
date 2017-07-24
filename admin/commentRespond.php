<?php
include_once "../database.php";
$commentId =  $_POST['commentId'];
if ($_POST['Accept'] == 'Accept') {
  $db->exec("UPDATE comment SET commentPermission='1' WHERE comid='$commentId'");
} else {
  $db->exec("DELETE FROM comment WHERE comid='$commentId'");
}
header("Refresh: 0; url=index.php");
?>
