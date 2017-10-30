<?php
/* -- Part 3 = Page student --
----------------------------

- public/list.php :
	* pour chaque ligne du tableau (<table>), ajouer un bouton (lien) qui envoie sur la page student
	
- public/student.php :
	* récupérer toutes les informations pour l'étudiant spécifié
	* inclure la vue correspondant à la page "student"
	* afficher les informations (id, nom, prénom, email, date de naissance, age, ville, sympathie, numéro et nom de session). Attention, l'affichage se fait dans la vue (view) et je ne veux pas de tableau (<table>)

*/
?>
<div class="container-fluid navi">
	<ul class="list-group">
  		<li class="list-group-item">Identifiant: <?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item">Nom de famille: <?php echo $listStudentPublic['stu_lastname'] ?></li>
  		<li class="list-group-item">Prénom: <?php echo $listStudentPublic['stu_firstname'] ?></li>
  		<li class="list-group-item">Email: <?php echo $listStudentPublic['stu_email'] ?></li>
  		<li class="list-group-item">Age: <?php echo $age ?></li>
  		<li class="list-group-item">Identifian nétudiant: <?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item">Ville: <?php echo $listStudentPublic['cit_name'] ?></li>
  		<li class="list-group-item">Sympathie: <?php echo $listStudentPublic['stu_friendliness'] ?></li>
  		<li class="list-group-item">Identifiant du cours: <?php echo $listStudentPublic['tra_id'] ?></li>
  		<li class="list-group-item">Nom du cour: <?php echo $listStudentPublic['tra_name'] ?></li>
	</ul>
</div>