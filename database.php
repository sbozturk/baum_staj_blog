<?php
$dbhost = "localhost";
$dbname = "tema_blog";
$user = "root";
$pass = "";
try {
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
  echo "Veritabanı bağlantı işlemi başarılı";
} catch (PDOException $e) {
    print $e -> getMessage();
}
$query = $db -> query("SELECT * FROM b_gonderiler ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
