<?php
include 'config.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE tb_usuario SET nome='$nome', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao atualizar usuário: " . $conn->error;
}

$conn->close();
?>
