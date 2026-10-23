<?php
session_start();

if (!isset($SESION["usuario"])){
    header("Local: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Bem vindo, <?= htmlspecialchars($_SESSION["usuario"]) ?></h1>
    <p>Esse é o painel logado. </p>
    <a href="sair.php">Sair</a>
</body>
</html>