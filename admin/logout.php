<?php
session_start();
ob_start();
session_destroy();
echo "Logout is successful. You are being redirected to the homepage.";
header("Refresh: 2; url=../index.php");
ob_end_flush();
?>
