<?php
$dbhost = "localhost";
$dbname = "baum_staj_proje";
$user = "root";
$pass = "";
try {
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$user,$pass);
  echo "Veritabanı bağlantı işlemi başarılı";
} catch (PDOException $e) {
    print $e -> getMessage();
}
$query = $db -> query("SELECT * FROM article ORDER BY time DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
