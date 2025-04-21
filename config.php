<?php
$host = "localhost";
$utilizador = "root";  // Altera se necessário
$senha = "";           // Altera se necessário
$base_dados = "pap";

$conn = new mysqli($host, $utilizador, $senha, $base_dados);

if ($conn->connect_error) {
    die("Erro na ligação à base de dados: " . $conn->connect_error);
}
?>
