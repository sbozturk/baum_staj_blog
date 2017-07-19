<?php
include("check.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:index.php");
}else{
echo "Email or password is wrong.<br>";
echo "You are being redirected to the homepage.";
header("Refresh: 2; url=enter.php");
}
ob_end_flush();
?>
