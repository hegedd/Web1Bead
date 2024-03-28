<?php
session_start();
include("aside.html"); 
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
        try {
            /*Kapcsolódás
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username,
            $password ,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');*/
            
             //Létezik már a felhasználói név?
            $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
            $sth = $pdo->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "A felhasználói név már foglalt!";
                $ujra = "true";
            }
            else {
                // Ha nem létezik, akkor regisztráljuk
                $sqlInsert = "insert into felhasznalok(id, csaladi_nev, uto_nev, bejelentkezes, jelszo)
                              values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
                $stmt = $pdo->prepare($sqlInsert); 
                $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                                     ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
                if($count = $stmt->rowCount()) {
                    $newid = $pdo->lastInsertId();
                    $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                    $ujra = false;
                }
                else {
                    $uzenet = "A regisztráció nem sikerült.";
                    $ujra = true;
                }
            }
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="pelda.html">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>