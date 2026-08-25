<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "crud_patinha";

$conexao = mysqli ($host, $user, $password, $database);

if ($conexao->connect_error) {
    die ("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");