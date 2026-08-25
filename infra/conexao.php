<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "crud_patinha";
$port = "3307";

$conn = mysqli_connect($host , $user , $password , $database, $port);

if ($conn->connect_error) {
    die ("Erro na conexão com o banco: " . $conn->connect_error);
};

$conn->set_charset("utf8mb4");