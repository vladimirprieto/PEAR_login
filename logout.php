<?php
require_once "Auth.php";
require_once "con_db.php";

$a = new Auth("DB", $options, "loginFunction", false);

$a->start();

if ($_GET['action'] == "logout" && $a->checkAuth()) {
    $a->logout();
    $a->start();
    header("Location: index.php");
}

