<?php
include("./includes/connect.conf.php");
try {
$pdo = new PDO("mysql:host=$host;dbname=$database", $username,
$password ,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>
