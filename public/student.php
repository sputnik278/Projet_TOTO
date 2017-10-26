<?php

//- inclure le fichier de config dans chaque fichier "public"

// inclure la config-php
require_once __DIR__.'/../inc/config.php';






//A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/home.php';
require_once __DIR__.'/../view/footer.php';

?>