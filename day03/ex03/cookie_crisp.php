<?php

if (isset($_GET['action']))
{
	switch ($_GET['action']){
		case 'set':
			setcookie($_GET['name'], $_GET['value']);
			break;
		case 'get':
			if (isset($_COOKIE[$_GET['name']]))	
				echo $_COOKIE[$_GET['name']]."\n";
			break;
		case 'del':
			setcookie($_GET['name'], $_GET['value'], 1);
			break;
	
		default:
			echo "error";
			break;
	}
}

?>
