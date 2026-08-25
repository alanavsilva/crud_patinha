<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conexao, $sql)) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . mysqli_error($conexao);
}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
<body>
    
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" required>

<label for="email">Email:</label>
<input type="email" name="email" id="email" required>

</body>
</html>

