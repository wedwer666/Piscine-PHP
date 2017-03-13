<?php

function auth($login, $passwd)
{
	if ($login === "" && $passwd === "")
		return (false);
	if (!file_exists("../private/passwd"))
		return (false);
	if (!($file = unserialize(file_get_contents("../private/passwd"))))
		return (false);
	foreach ($file as $f)
	{
	 	if	($f['login'] === $login && $file['passwd'] === hash("whirlpool", $passwd)
			return (true);
	else
		return (false);
	}
}

else
	echo "ERROR\n";

	if auth($login, $passwd)
		return (true)
	else
		return (false);


?>