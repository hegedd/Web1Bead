<?php
// Start the session
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<?php
include_once("connect.php");
if(!isset($_GET["page"]))
{
    echo 'Főoldal';
     include("aside.html"); 
}
else
{
    if(($_GET["page"]=="kapcsolat"))
    {
        include_once("kapcsolatform.php");
    }
    else if ($_GET["page"]=="kapcsolatkuldes")
    {
        include_once("./templates/pages/kapcsolat.php");
    }
    else if($_GET["page"]=="galeria")
    {
        include_once("./templates/pages/gallery.tpl.php");

    }
    else if($_GET["page"]=="feltotles")
    {
        include_once("./templates/pages/feltolt.php");

    }
    else if($_GET["page"]=="map")
    {
        include_once("./templates/pages/terkep.php");
    }

    else if($_GET["page"]=="belep" || $_GET["page"]=="regisztr")
    {
        include_once("pelda.html");

    }
    else if($_GET["page"]=="regisztral")
    {
        include_once("./templates/pages/regisztracio.php");

    }
    else if($_GET["page"]=="belepes")
    {
        include_once("./templates/pages/belepes.php");

    }
    else if($_GET["page"]=="kilep")
    {
        include_once("./templates/pages/kilepes.php");

    }


}
?>
