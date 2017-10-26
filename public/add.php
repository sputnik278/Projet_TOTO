<?php

//- inclure le fichier de config dans chaque fichier "public"

// inclure la config-php
require_once __DIR__.'/../inc/config.php';
require_once __DIR__.'/../view/header.php';

/* -- Part 4 = Page add/ajout --
--------------------------------
	
- public/add.php :
	* inclure la vue correspondant à la page "add"
	* dans la vue, écrire le formulaire HTML permettant de saisir les données suivantes sur un student :
		nom, prénom
	* après soumissions du formulaire :
		** récupérer les données envoyées en POST par le formulaire
		** traiter et valider les données
		** si toutes les données sont valides, ajouter en DB puis rediriger sur la page "student" de l'étudiant ajouté
	* récupérer toutes les villes de la DB (ou utiliser l'array)
	* récupérer toutes les sessions de la DB
	* si tout fonctionne, ajouter les champs suivants (et leur traitement, validation, etc.) :
		date de naissance, email, sympathie, session (menu déroulant <select>) et ville (menu déroulant <select>)
	
*/
?>

<div class="container-fluid">
  container
</div>

<?php
//A la fin, j'affiche
require_once __DIR__.'/../view/footer.php';
?>