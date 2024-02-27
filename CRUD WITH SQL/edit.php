<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tb_usuario WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $email = $row['email'];
} else {
    echo "Usuário não encontrado.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
