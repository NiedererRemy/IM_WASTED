<?php

// Datenbank Verbindung aufbauen
// Siehe: https://www.php-einfach.de/mysql-tutorial/crashkurs-pdo/
// Siehe: https://www.php-einfach.de/mysql-tutorial/verbindung-aufbauen/
// Siehe: https://phpdelusions.net/pdo#dsn

function get_db_connection(){

	global $db_host, $db_name, $db_user, $db_pass, $db_charset;

	$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset"; // siehe https://en.wikipedia.org/wiki/Data_source_name
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false
	];
	try {
		$db = new PDO($dsn, $db_user, $db_pass, $options);
	} catch (\PDOException $e) {
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}
	return $db;
}


function datebankhole(){
	$db = get_db_connection();
	$sql = "SELECT `specificproblem` FROM `problems` ORDER BY RAND ( ) LIMIT 1";
	$result = $db->query($sql);
	return $result->fetch();
}


function fisch(){
	$db = get_db_connection();
	$sql = "SELECT * FROM `problems`";
	$result = $db->query($sql);
	return $result->fetchAll();
}

function datebankholealle(){
	$db = get_db_connection();
	$sql = "SELECT `specificproblem` FROM `problems` ORDER BY RAND ( )";
	$result = $db->query($sql);
	return $result->fetchAll();
}
