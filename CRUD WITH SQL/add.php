<?php
include 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO tb_usuario (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao adicionar usuário: " . $conn->error;
}

$conn->close();
?>
