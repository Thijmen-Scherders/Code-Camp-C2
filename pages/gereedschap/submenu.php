<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl()?>/pages/gereedschap/zagen/kettingzagen/index.php">Kettingzagen</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/zagen/cirkelzagen/index.php">Cirkelzagen</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/zagen/handzagen/index.php">Handzagen</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/hamers/index.php">Hamers</a>
        <a href="<?php echo baseUrl()?>/pages/gereedschap/schroevendraaiers/index.php">Schroevendraaiers</a>
    </div>
</div>