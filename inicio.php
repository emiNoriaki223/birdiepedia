<?php

session_start();
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="inicio.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birdiepedia</title>
</head>
<body>
    <img src="../imgs/BIBI.png" class="bibi">
    <div class="passaros">
        <img src="../imgs/bemtevi.jpg" id="bemtevi">
        <img src="../imgs/queroquero.jpg" id="queroquero">
        <img src="../imgs/azulao.jpg" id="azulao">
        <img src="../imgs/joaobobo.jpg" id="joaobobo">
    </div>
    <h3> Bem vindo ao birdiepedia! pesquise sobre pássaros e compartilhe experiências! :)</h3>

    <input type="text" class="barra" placeholder="Pesquise seus pássaros">
    <button type="submit" class="lupa">lupinha</button>

    <button class="cadastro">Cadastre-se</button>

    <button class="login">Login</button>
</body>
</html>