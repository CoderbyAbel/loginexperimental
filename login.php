<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN EXPERIMENTAL</title>
</head>
<?php
include_once("inserirDados.php");
$validation = new Data($_POST["name"], $_POST["password"]);


?>
<body style="display: flex; flex-direction: column; justify-content: center; align-items: center; font-family: Helvetica;">
    <h1>
        Backps-Marata</h1>
    <form style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 0.5em;" action="login.php" method="post">
    <input type="text" name="name" id="" placeholder="usuario">
    <input type="password" name="password" id="" placeholder="senha" >
    <input style="padding: 0.3em 2em;" type="submit" value="Enviar">
    </form>
</body>
</html>