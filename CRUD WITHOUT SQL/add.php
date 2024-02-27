<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">CREATE</h1>
    <div>
        <a href="index.php">Voltar</a>
        <form method="POST">
            <input type="text" id="id" name="id" placeholder='id'>
            <input type="text" id="nome" name="nome" placeholder='nome'>
            <input type="text" id="email" name="email" placeholder='email'>
            <input type="submit" name="salvar" value="salvar">
        </form>
    </div>
</div>    
<?php
    if(isset($_POST['salvar'])){
        //Abre o json
        $data = file_get_contents('usuarios.json');
        $data = json_decode($data);

        $input = array(
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email']
        );
 
        $data[] = $input;
        //insere no json
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('usuarios.json', $data);
 
        header('location: index.php');
    }
?>
</body>
</html>