<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/index.php">Terug</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Roger-Moore/James-bond.php">Roger Moore (Film personage)</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Timothy-Dalton/James-bond.php">Timothy Dalton (Film personage)</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/George-clooney/Matt-King.php">George Clooney (Film personage)</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Darth.php">Darth vader</a>
        <a href="<?php echo baseUrl(); ?>/pages/acteurs/acteur/Luke.php">Luke skywalker</a>
    </div>
</div>