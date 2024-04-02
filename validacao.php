<?php
include_once("inserirDados.php");
$validation = new Data($_POST["name"], $_POST["password"]);
session_start();

if($_SESSION["login"] == true){
    echo "<script >location.href = 'outrapaginaqualquer.php';</script>";
    session_destroy();
}else {
    echo "<script >location.href = 'login.php';</script>";

    session_destroy();
}
?>
