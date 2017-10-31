<?php

$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'comadreja88';
$password = 'lacomadreja18';

try{

	$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}
?>
