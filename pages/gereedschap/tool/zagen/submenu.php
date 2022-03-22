<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
    <div class="container black">
        <a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Terug</a>
        <a href="kettingzagen.php">Kettingzagen</a>
        <a href="cirkelzagen.php">Cirkelzagen</a>
        <a href="handzagen.php">Handzagen</a>
    </div>
</div>