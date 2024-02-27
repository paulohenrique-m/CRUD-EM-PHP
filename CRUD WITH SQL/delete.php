<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_usuario WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao excluir usuário: " . $conn->error;
}

$conn->close();
?>
