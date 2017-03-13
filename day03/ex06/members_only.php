<?php
$user = "zaz";
$pass = "jaimelespetitsponeys";
$img = "../img/42.png";
$data = base64_encode(file_get_contents($img));
if (!isset($_SERVER['PHP_AUTH_USER']))
{
	  header('WWW-Authenticate: Basic realm="Espace membres"');
	  header('HTTP/1.0 401 Unauthorized');
	  echo '<html><body>Aceasta zona e accesibila doar membrilor site-ului</body><html>';
	  exit;
}
else
{
	if ($_SERVER['PHP_AUTH_USER']==$user && $_SERVER['PHP_AUTH_PW']==$pass)
	{
		echo "<html><body>Bonjour Zaz <br />";
		echo '<img src = "data:image/png; base64,'. $data . '">';
		echo "</body></html>";
			exit;
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Espace membres"');
		header('HTTP/1.0 401 Unauthorized');
		echo '<html><body>Aceasta zona e accesibila doar membrilor site-ului</body><html>';
		exit;
	}
}

?>
