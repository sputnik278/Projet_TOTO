<?php
require_once __DIR__.'/../inc/config.php';
//---------------------------------------------------------------
//- inclure le fichier de config dans chaque fichier "public"
//- public/student.php :
//	* récupérer toutes les informations pour l'étudiant spécifié
//	* inclure la vue correspondant à la page "student"
//	* afficher les informations (id, nom, prénom, email, date de naissance, age, ville, sympathie, numéro et nom de session). Attention, l'affichage se fait dans la vue (view) et je ne 
//    veux pas de tableau (<table>)

$sql = '
	SELECT *
	FROM student
	INNER JOIN city
	ON student.city_cit_id = city.cit_id;
	INNER JOIN session
	ON city.session_ses_id = session.ses_id;
	WHERE stu_id ='.$_GET['id'];


$pdoStatement = $pdo->query($sql);

$listStudentPublic = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

echo $listStudentPublic['stu_id'];
// inclure la config-php
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/student.php';
require_once __DIR__.'/../view/footer.php';
?>