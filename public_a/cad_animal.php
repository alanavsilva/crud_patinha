<?php

include ('../infra/conexao.php');

$sql_clientes = "SELECT id, nome FROM clientes";
$resultado = mysqli_query($conn, $sql_clientes);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $cliente = $_POST['id_cliente'];

    $sql = "INSERT INTO animais (nome, tipo, raca, idade, id_cliente) VALUES ('$nome', '$tipo', '$raca', '$idade', '$cliente')";

    if (mysqli_query($conn, $sql)) {
        echo "Animal cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar animal: " . mysqli_error($conn);
            }
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
    
<form method = "POST">
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
  <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            <option value="">Selecione um Cliente</option>
            <?php
           while ($cliente = mysqli_fetch_assoc($resultado)) {
            echo "<option value='{$cliente['id']}'>{$cliente['nome']}</option>";
        }
            ?>
        </select>
        <br>
<button type="submit">Enviar</button>

</form>
</body>
</html>

