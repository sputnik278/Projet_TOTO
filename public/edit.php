<?php
//- inclure le fichier de config dans chaque fichier "public"
// inclure la config-php
require_once __DIR__.'/../inc/config.php';
require_once __DIR__.'/../view/header.php';
?>
<br><br><br>
<div class="container-fluid">
	<div class="card">
	  <div class="card-header">
	    <h3>Public Edit</h3>
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
//A la fin, j'affiche
require_once __DIR__.'/../view/footer.php';
?>