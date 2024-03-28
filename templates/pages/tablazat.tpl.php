<?php
include_once("./includes/connect.conf.php");
try {
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, //adatbázis hozzáférés
$password ,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
$utasitas = "select uzenet, datum, nev from uzenet order by datum desc"; //lekérdezés
$eredm = $pdo->query($utasitas);
}
catch (PDOException $e) {
echo "Hiba: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf8_hungarian_ci">
 </head>
  <body>
    <table class="table table-striped">
      <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Üzenet</th>
              <th scope="col">Név</th>
              <th scope="col">Dátum</th>
            </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_SESSION['login'])){
          $x=1;
          foreach ($eredm as $sor){
          print "<tr><th scope='row'>". $x ."</th><td>" . $sor['uzenet'] . "</td>" . " <td>" .$sor['nev'] . "</td>" . "<td>" .$sor['datum'] . "</td></tr>";
          $x++;}}
          else echo "<H3>Az üzenetek megtekintéséhez bejelentkezés szükséges.</H3>"
        ?>
      </tbody>
    </table>
  </body>
</html>