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
	ON student.city_cit_id = city.cit_id
	INNER JOIN session
	ON student.session_ses_id = session.ses_id
	INNER JOIN training
	ON session.training_tra_id = training.tra_id
	WHERE stu_id ='.$_GET['id'];


$pdoStatement = $pdo->query($sql);
$listStudentPublic = $pdoStatement->fetch(PDO::FETCH_ASSOC);

$todayDate = date("d",time()); 
$todayMonth = date("m",time()); 
$todayYear = date("Y",time()); 
// Détermination de l'âge 
$age = $listStudentPublic['stu_birthdate']; // recupération MySQL en format yy/mm/dd // ok ca marche

$age = explode("-", $age); 

if ($todayDate >= $age[2] and $todayMonth = $age[1] or $todayYear >= $age[0]) { 
        $age = $todayYear - $age[0]; 
    }
else { 
        $age = $todayYear - $age[1] - 1; 
   }


require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/student.php';
require_once __DIR__.'/../view/footer.php';
?>