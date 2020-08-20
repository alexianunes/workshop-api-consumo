<?php
require 'environment.php';

define("BASE_URL", "http://localhost/workshop-projeto/");
define("BASE_URL_API", "http://localhost/workshop-api/");

// $config = array();
// if(ENVIRONMENT == 'development') {
// 	define("BASE_URL", "http://localhost/vulnerabilidades/");
// 	$config['dbname'] = 'vulnerabilidades';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
// } else {
// 	define("BASE_URL", "http://localhost/vulnerabilidades/");
// 	$config['dbname'] = 'vulnerabilidades';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
// }

// global $db;
// try {
// 	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
// } catch(PDOException $e) {
// 	echo "ERRO: ".$e->getMessage();
// 	exit;
// }