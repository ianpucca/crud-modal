<?php

$dsn = "mysql:dbname=banco;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "falhou: ".$e->getMessage();
}
?>
