<?php

//- inclure le fichier de config dans chaque fichier "public"

// inclure la config-php
require_once __DIR__.'/../inc/config.php';
require_once __DIR__.'/../view/header.php';
/* -- Part 2 = Page liste --
----------------------------

- public/list.php :
	* en fin de script, inclure les vues "header" & "footer"
	* récupérer toutes les informations sur tous les étudiants en DB
	* inclure la vue correspondant à la page "list"
	* afficher les informations (id, nom, prénom, email et date de naissance) sous forme de tableau (<table>). Attention, l'affichage se fait dans la vue (view)
*/
?>
<br><br><br>
<div class="container-fluid">
	<div class="card">
	  <div class="card-header">
	    <h3>Public Liste</h3>
	  </div>
	  <div class="card-body">
	    <blockquote class="blockquote mb-0">
	      <p>PHP</p>
	      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
	    </blockquote>
	  </div>
	</div>
</div>

<?php
/* -- Part 3 = Page student --
----------------------------

- public/list.php :
	* pour chaque ligne du tableau (<table>), ajouer un bouton (lien) qui envoie sur la page student*/

/* -- Part 5 = Pagination --
----------------------------

- demander le cours sur cette partie
- view/list.php :
	* ajouter des boutons suivants et précédents
	
- public/list.php :
	* limiter les résultats de la requête à 5 étudiants
	* mettre en place un système de pagination en passant le numéro de page dans l'URL : list.php?page=2
	
*/
/* -- Part 6 = recherche --
-----------------------------
	
- view/header.php :
	* dans la barre de menu, ajouter un formulaire permettant d'effectuer une recherche
		Ce formulaire renvoie sur list.php avec le mot recherchée en GET
	
- public/list.php :
	* récupérer le paramètre GET contenant le mot recherché
	* si l'ID est fourni :
		** modifier la requête pour filtrer sur le mot recherché dans les champs textuels suivants :
			nom/prénom/email/ville de l'étudiant
		** afficher "x résultat(s) pour le mot XX" avant le tableau (<table>) des étudiants

*/
		/* -- Part 8 = Liste pour 1 session --
--------------------------------------
	
- public/index.php :
	* mettre un lien sur les noms, dates et lieux dans sessions. Ce lien renvoit sur list.php pour afficher les étudiants de cette session uniquement (filtre)
	
- public/list.php :
	* récupérer le paramètre GET contenant l'ID de la session demandée
	* si l'ID est fourni :
		** modifier la requête pour filtrer sur l'ID de session
		** afficher "Etudiants pour la session n°X à XXX" avant le tableau (<table>) des étudiants

*/




//A la fin, j'affiche
require_once __DIR__.'/../view/footer.php';
?>