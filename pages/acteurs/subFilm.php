<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/index.php">Terug</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Darth.php">Darth vader</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Luke.php">Luke skywalker</a>
    </div>
</div>