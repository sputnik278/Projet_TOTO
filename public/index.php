<?php

//- inclure le fichier de config dans chaque fichier "public"

// inclure la config-php
require_once __DIR__.'/../inc/config.php';
require_once __DIR__.'/../view/header.php';
/* -- Option 1 = home --
------------------------
	
- public/index.php :
	* récupérer la statistique suivante (agrégation) :
		le nombre d'étudiants par ville
	* dans la vue, afficher les villes et leur nombres d'étudiants, sous forme de tableau (<table>)
	
*/
/* -- Part 7 = Home --
----------------------
	
- public/index.php :
	* récupérer toutes données sur les sessions en DB (nom de la session, numéro, dates et lieu)
	* inclure la vue correspondant à la page "home"
	* afficher toutes les sessions, regroupées par lieu :
		Fit4Coding Esch-Belval
		Session 1	01/01/2015	31/12/2015
		Session 2	01/01/2016	31/12/2016
		Session 3	01/01/2017	31/12/2017
		
		Numericall Piennes
		Session 1	01/04/2015	31/08/2015
		Session 2	01/05/2016	31/08/2016

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

//- public/index.php
//	* en fin de script, inclure les vues "header", "home" & "footer"

require_once __DIR__.'/../view/home.php';
require_once __DIR__.'/../view/footer.php';

?>