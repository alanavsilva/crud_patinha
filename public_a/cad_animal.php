<?php

include 'conexao.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];

$sql = "INSERT INTO animais (nome, tipo, raca, idade) VALUES ('$nome', '$tipo', '$raca', '$idade')";

if (mysqli_query($conexao, $sql)) {
    echo "Animal cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar animal: " . mysqli_error($conexao);
}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Animal</title>
</head>
<body>
    
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" required>
<br>
<label for="tipo">Qual o animal:</label>
<input type="text" name="tipo" id="tipo" required>
<br>
<label for="raca">Raça:</label>
<input type="text" name="raca" id="raca" required>
<br>
<label for="idade">Idade:</label>
<input type="number" name="idade" id="idade" required>
<br>
<button type="submit">Enviar</button>

</body>
</html>

