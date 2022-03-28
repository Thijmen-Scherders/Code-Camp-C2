<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/index.php">Terug</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Timothy-Dalton/Timothy-Dalton.php">Acteur</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Timothy-Dalton/James-bond.php">Film personage</a>
    </div>
</div>