<?php

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
	    	<table class="table">
			  <thead>
			    <tr>
			    	<th scope="col">#</th>
			    	<th scope="col">Nom de famile</th>
			    	<th scope="col">Prénom</th>
			    	<th scope="col">Email</th>
			    	<th scope="col">Date de naissance</th>
			    </tr>
			  </thead>
			  <tbody>
<?php foreach ($listStudentPublic as $keyStudent => $valueStudent) : ?>
			  	<tr>
			  		<td><?php echo $valueStudent['stu_id'] ?></td>
			  		<td><?php echo $valueStudent['stu_lastname'] ?></td>
			  		<td><?php echo $valueStudent['stu_firstname'] ?></td>
			  		<td><?php echo $valueStudent['stu_email'] ?></td>
			  		<td><?php echo $valueStudent['stu_birthdate'] ?></td>
			  	</tr>
			  </tbody>
			<?php endforeach; ?>
			</table>
	      <footer class="blockquote-footer">Fin de la liste!</footer>
	    </blockquote>
	  </div>
	</div>
</div>
<br><br><br>






