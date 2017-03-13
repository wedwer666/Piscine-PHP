<?php
if ($_POST['login'] === "" || $_POST['oldpw'] === "" || $_POST['newpw'] === "" || $_POST['submit'] !== "OK")
	exit ("ERROR\n");
if (!file_exists("../private/passwd"))
	exit ("ERROR\n");
if (!($file = unserialize(file_get_contents("../private/passwd"))))
	exit ("ERROR\n");
for ($i=0; $i < count($file); $i++) { 
	if ($file[$i]['login'] === $_POST['login'] && $file[$i]['passwd'] === hash("whirlpool", $_POST['oldpw']))
	{
		$file[$i]['passwd'] = hash("whirlpool", $_POST['newpw']);
		file_put_contents("../private/passwd", serialize($file));	
		exit ("OK\n");
	}
}
file_put_contents("../private/passwd", serialize($file));	
echo "ERROR\n";
?>