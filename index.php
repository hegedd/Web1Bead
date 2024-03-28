<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include('./includes/config.inc.php');
include('./connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
//$keres = current($oldalak);
$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else if (isset($extrak[$_GET['oldal']]) && file_exists("./templates/pages/{$extrak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $extrak[$_GET['oldal']];
	}
	else { 
		$keres = $hiba_oldal;
		//header("HTTP/1.0 404 Not Found");
	}
}

include("./templates/index.tpl.php"); 
?>
</html>