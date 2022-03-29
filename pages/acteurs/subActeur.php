<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/index.php">Terug</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Roger-Moore/Roger-Moore.php">Roger Moore</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Timothy-Dalton/Timothy-Dalton.php">Timothy Dalton</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/George-clooney/Georgeclooney.php">George Clooney</a>
    </div>
</div>