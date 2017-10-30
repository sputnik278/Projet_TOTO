<?php

//- inc/config.php :
//	* créer un tableau $config avec en valeurs les données nécessaires à la connexion à la DB (host, username, password, database)
//	* inclure les fichiers db.php et functions.php

//Donné de configurations de conection de la BD
$config =array(
	'DB_HOST' => '',
	'DB_USER' => '',
	'DB_PASSWORD' => '',
	'DB_DATABASE' => ''
);
//attachement des fichiers db.php et functions.php
require_once __DIR__.'/db.php';
require_once __DIR__.'/functions.php';

//inclusion de composer (pour avoitr toutes les librairies installer via composer)
require_once __DIR__.'/../vendor/autoload.php';
//Solcial networks
//Create a Page instance with the url information
$socialLinksPage = new SocialLinks\Page([
    'url' => 'http://www.projet-toto.dev',
    'title' => 'projet-toto',
    'text' => 'Liste des etudians de Webforce3',
    'image' => 'http://www.projet-toto.dev/image.png',
    'icon' => 'http://www.projet-toto.dev/favicon.png',
    'twitterUser' => '@twitterUser'
]);

?>
