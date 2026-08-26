<?php

include ('../infra/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes (nome, email) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $nome, $email);

if (mysqli_stmt_execute($stmt)) {
    echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
        }
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    
<form method = "POST">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" required>
<br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required>
<br>
<button type="submit">Enviar</button>
</form>
</body>
</html>

