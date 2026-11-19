<?php

if($_SERVER["REQUEST_METHOD"]){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $salario = $_POST["salario"];
    $tipo = $_POST["tipo"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <title>Cadastro</title>
</head>
<body>
    <form method=POST>
        <label>Digite seu nome</label>
        <input type="text" id="nome" name="nome"></input>

        <label>Digite seu e-mail</label>
        <input type="text" id="email" name="email"></input>

        <label>Digite seu salario</label>
        <input type="text" id="salario" name="salario"></input>

        <label>Digite sua função</label>
        <input type="text" id="tipo" name="tipo"></input>
    </form>

    <h2>Lista de Funcionários Cadastrados</h2>
    <table>
        <tr>
            <th>Nome:<?= $nome?></th>
            <th>Email: <?= $email?></th>
            <th>Salário: <?= $salario?></th>
            <th>Função: <?= $tipo?></th>
        </tr>
    </table>
</body>
</html>