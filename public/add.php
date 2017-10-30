<?php

//- inclure le fichier de config dans chaque fichier "public"

// inclure la config-php
require_once __DIR__.'/../inc/config.php';


/* -- Part 4 = Page add/ajout --
--------------------------------
	
- public/add.php :
	* inclure la vue correspondant à la page "add"
	* dans la vue, écrire le formulaire HTML permettant de saisir les données suivantes sur un student :
		nom, prénom
	* après soumissions du formulaire :
		** récupérer les données envoyées en POST par le formulaire
		** traiter et valider les données
		** si toutes les données sont valides, ajouter en DB puis rediriger sur la page "student" de l'étudiant ajout
	
*/

// Initialisations
$stu_firstname = '';
$stu_lastname = '';
$stu_birthdate = '';
$stu_email = '';
$stu_friendliness = '';

// Si formulaire soumis
if (!empty($_POST)) {
//print_r($_POST);

	// Je récupère les données
	$stu_firstname = isset($_POST['stu_lastname']) ? $_POST['stu_lastname'] : '';
	$stu_lastname = isset($_POST['stu_firstname']) ? $_POST['stu_firstname'] : '';
	$stu_birthdate = isset($_POST['stu_birthdate']) ? $_POST['stu_birthdate'] : '';
	$stu_email = isset($_POST['stu_email']) ? $_POST['stu_email'] : '';
	$stu_friendliness = isset($_POST['stu_friendliness']) ? $_POST['stu_friendliness'] : '';
	// Traiter les données
	$stu_lastname = strtoupper(trim(strip_tags($stu_lastname))); // retire les espaces au debut et à la fin et uppercase
	$stu_firstname = ucfirst(trim(strip_tags($stu_firstname))); // Uppercase first letter et retire les espaces au debut et à la fin 
	$stu_email = (trim(strip_tags($stu_email))); // Uppercase first letter et retire les espaces au debut et à la fin 
	$stu_friendliness = (trim(strip_tags($stu_friendliness))); // Uppercase first letter et retire les espaces au debut et à la fin 

	//inserer les données
	$sql='
	INSERT INTO student (stu_firstname, stu_lastname, stu_birthdate, stu_email, stu_friendliness)
	VALUES ( :stu_firstname, :stu_lastname, :stu_birthdate, :stu_email, :stu_friendliness ); 
	';
	// Je prépare ma requête, mais ne l'exécute pas encore
	$pdoStatement = $pdo->prepare($sql);
	// Je donne des valeurs à chaque "jeton" ou "token" (=> :jeton)
	$pdoStatement->bindValue(':stu_firstname', $stu_firstname, PDO::PARAM_STR);
	$pdoStatement->bindValue(':stu_lastname', $stu_lastname, PDO::PARAM_STR);
	$pdoStatement->bindValue(':stu_birthdate', $stu_birthdate, PDO::PARAM_STR);
	$pdoStatement->bindValue(':stu_email', $stu_email, PDO::PARAM_STR);
	$pdoStatement->bindValue(':stu_friendliness', $stu_friendliness, PDO::PARAM_STR);
	// J'exécute la requête préparée (!= PDO::exec())
	$retour = $pdoStatement->execute();

	// Validation des données
	$formuOKInsetDonnes = true;

	//verif stu_firstname
	if (empty($stu_firstname)) {
		echo 'Prénom vide<br>';
		$formuOKInsetDonnes = false;
	}
	else if (strlen($stu_firstname) < 2) {
		echo 'Prénom incorrect<br>';
		$formuOKInsetDonnes = false;
	}
	//verif stu_lastname
	if (empty($stu_lastname)) {
		echo 'Nom vide<br>';
		$formuOKInsetDonnes = false;
	}
	else if (strlen($stu_lastname) < 2) {
		echo 'Nom incorrect<br>';
		$formuOKInsetDonnes = false;
	}
	//verif stu_birthdate
	if (empty($stu_birthdate)) {
		echo 'Date de naiscance vide<br>';
		$formuOKInsetDonnes = false;
	}
	else if (strlen($stu_birthdate) < 11) {
		echo 'Date de naiscance incorrect<br>';
		$formuOKInsetDonnes = false;
	}
	// verif stu_email
	if (empty($stu_email)) {
		echo 'Email manquante<br>';
		$formuOKInsetDonnes = false;
	}
	else if (filter_var($stu_email, FILTER_VALIDATE_EMAIL) === false) {
		echo 'Email in correct<br>';
		$formuOKInsetDonnes = false;
	}
	if (strlen($stu_friendliness) <= 0 && strlen($stu_friendliness) > 1 && $stu_friendliness >5) {
		echo 'Mauvaise valeur doit étre comprit entre 1 et 5.<br>';
		$formuOKInsetDonnes = false;
	}
}
/* -- REST Part 4 = Page add/ajout --
--------------------------------
	* récupérer toutes les villes de la DB (ou utiliser l'array)
	* récupérer toutes les sessions de la DB
	* si tout fonctionne, ajouter les champs suivants (et leur traitement, validation, etc.) :
		date de naissance, email, sympathie, session (menu déroulant <select>) et ville (menu déroulant <select>)*/


//recuperation Ville pour pull down
$sql='
SELECT loc_name
FROM location
';
$pdoStatement = $pdo->query($sql);
$listLocationPD = $pdoStatement->fetchall(PDO::FETCH_ASSOC);

//recuperation des session pour pulldown menu
$sql='
SELECT location_loc_id
FROM session
';
$pdoStatement = $pdo->query($sql);
$listSessionPD = $pdoStatement->fetchall(PDO::FETCH_ASSOC);

//A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/add.php';
require_once __DIR__.'/../view/footer.php';
?>