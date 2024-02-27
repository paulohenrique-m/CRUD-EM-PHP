<!DOCTYPE html>
<html>
<body>
    <h2>Lista de Usuários</h2>
    <?php
    include 'config.php';

    //READ---------------
    $sql = "SELECT * FROM tb_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            //UPDATE,CREATE E DELETE
            echo "<li>" . $row["nome"] . " - " . $row["email"] . " <a href='edit.php?id=" . $row["id"] . "'>Editar</a> <a href='delete.php?id=" . $row["id"] . "'>Excluir</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum usuário cadastrado.";
    }
    ?>

    <h2>Adicionar Novo Usuário</h2>
    
    <form action="add.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>

