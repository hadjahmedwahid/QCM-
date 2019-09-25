<?php
	define('DB_HOST', 'localhost');  
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
	define('DB_NAME', 'qcm');

	  
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=qcm', 'root', '',
$pdo_options);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


?>