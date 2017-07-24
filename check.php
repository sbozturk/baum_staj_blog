<?php
include "database.php";
$email =$_POST['email'];
$query = $db -> query("SELECT * FROM user WHERE userEmail LIKE '$email'", PDO::FETCH_ASSOC);
if ($query->rowCount()) {
  foreach ($query as $row) {
$user = $row["userEmail"];;
$pass = $row["userPassword"];;
}
}
?>
