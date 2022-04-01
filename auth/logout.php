<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
$auth = $path . "/auth/auth.php";
include_once($config);
include_once($auth);


session_destroy();
header('Location: ' . baseUrl());