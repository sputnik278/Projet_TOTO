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
<br>
<br>
<div class="container-fluid">
	<ul class="list-group">
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_lastname'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_firstname'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_email'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_birthdate'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_id'] ?></li>
  		<li class="list-group-item"><?php echo $listStudentPublic['stu_id'] ?></li>

	</ul>
</div>