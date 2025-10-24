<?php
define("SITE_NAME", "123");
define("MAX_USERS", 100);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php

	if (defined("SITE_NAME")) {
		echo "Значение константы SITE_NAME: " . SITE_NAME . "<br>";
	} else {
		echo "Константа SITE_NAME не определена<br>";
	}
	
	if (defined("MAX_USERS")) {
		echo "Значение константы MAX_USERS: " . MAX_USERS . "<br>";
	} else {
		echo "Константа MAX_USERS не определена<br>";
	}

	echo "Текущая версия PHP: " . PHP_VERSION . "<br>";
	echo "Директория скрипта: " . __DIR__ . "<br>";
	echo "Имя файла: " . __FILE__ . "<br>";
	echo "Строка кода: " . __LINE__ . "<br>";
	?>
</body>
</html>
