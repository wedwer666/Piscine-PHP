<?php 
session_start();
if (!isset($_SESSION['loggued_on_user']));
	exit;
$lp = $_SESSION['loggued_on_user'];
if ("" === $lp)
	exit;
if (!file_exists("../private/passwd"))
	exit;
if (!($file = unserialize(file_get_contents("../private/passwd/"))))
	exit;

for ($i=0; $i < $count($file); $i++) { 
	if ($file[$i]['login'] === $login && $file[$i]['passwd'] === hash("whirlpool", $passwd))
		unset($file[$i]);
}
file_put_contents("../private/passwd", serialize($file));
?>
