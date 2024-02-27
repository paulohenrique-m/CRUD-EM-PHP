<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    $index = $_GET['index'];
    //Pega dado do json
    $data = file_get_contents('usuarios.json');
    $data_array = json_decode($data);

    $row = $data_array[$index];
 
    if(isset($_POST['save'])){
        $input = array(
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email']
        );

        $data_array[$index] = $input;
 
        //volta para o json com dado novo
        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('usuarios.json', $data);
 
        header('location: index.php');
    }
?>
<div><a href="index.php">Voltar</a>
    <form method="POST">
        <input type="text" id="id" name="id" value="<?php echo $row->id; ?>">
        <input type="text" id="nome" name="nome" value="<?php echo $row->nome; ?>">
        <input type="text" id="email" name="email" value="<?php echo $row->email; ?>">
        <input type="submit" name="save" value="Save" class="btn btn-primary">
    </form>
</div>
</body>
</html>