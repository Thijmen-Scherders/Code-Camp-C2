<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl()?>/pages/gereedschap/zagen/index.php">Zagen</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/hamers.php">Hamers</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/schroevendraaiers.php">Schroevendraaiers</a>
    </div>
</div>