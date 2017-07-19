<?php
include "database.php";
$query = $db -> query("SELECT * FROM user", PDO::FETCH_ASSOC);
if ($query->rowCount()) {
  foreach ($query as $row) {
$user = $row["userEmail"];;
$pass = $row["userPassword"];;
}
}
?>
