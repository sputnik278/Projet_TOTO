<?php

//- inc/db.php :
//	* écrire le code de connexion à la base de données (PDO + dsn) en se basant sur les valeurs du tableau $config

$dsn = 'mysql:dbname='.$config['DB_DATABASE'].';host='.$config['DB_HOST'].';charset=UTF8';

// Try/catch permet d'intercepter des erreurs survenues dans "try"
try {
	// Je crée une instance de PDO
	$pdo = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);
}
catch (Exception $e) {
	echo 'Connexion échouée : '.$e->getMessage();
}

?>