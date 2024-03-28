<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="index.old.php?page=kapcsolatkuldes" onsubmit="return ellenoriz();"  method="post">
        <div>
            <?php
            if(!isset($_SESSION['login']))
            {
                echo "Vendég <input type='hidden' id='nev' name='nev' value='Vendég'>";
            }
            else
            {
                echo $_SESSION["csn"].' '.$_SESSION["un"].' '."<input type='hidden' id='nev' name='nev' value='".$_SESSION["csn"].' '.$_SESSION["un"]."'>";
                //var_dump($_SESSION);
            }

            ?>
            <br/>
            <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail (kötelező): </label>
            <br/>
            <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet (kötelező): </label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>

</body>
</html>