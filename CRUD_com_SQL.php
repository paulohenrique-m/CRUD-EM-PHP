<?php
    $pdo = new PDO('mysql:host=localhost;dbname=database','root','3006paulo');

    //INSERT-----------------
    if(isset($_POST['nome'])and isset($_POST['email']) and !isset($_POST['id'])){
        //inserir no banco 
        //tabela de usuario conta com
        //id -> autoincremente 
        //nome e email -> varchar
        $sql = $pdo->prepare("INSERT INTO tb_usuario VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        //limpar os campos apos o envio
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
    //DELETE-----------------
    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $sql = $pdo->prepare("DELETE FROM tb_usuario WHERE id = ?");
        $sql->execute(array($id));
        //limpar os campos apos o envio
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
    //UPDATE-----------------
    if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $sql = $pdo->prepare("UPDATE tb_usuario SET nome = ?, email = ? WHERE id = ?");
        $sql->execute(array($nome, $email, $id));
    
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

?>
<script>
    //função Javascript para modal de UPDATE
    function openModal(id, nome, email) {
        console.log("abriu")
        document.getElementById('id_edit').value = id;
        document.getElementById('nome_edit').value = nome;
        document.getElementById('email_edit').value = email;
        document.getElementById('modal_edit').style.display = 'block';
    }

    function closeModal() {
        console.log("fechou")
        document.getElementById('modal_edit').style.display = 'none';
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="enviar">
</form>

<div id="modal_edit" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background:#f9f9f9; padding:20px; border:1px solid #ccc; z-index:9999;">
    <h2>Editar Usuário</h2>
    <form method="post">
        <input type="hidden" name="id" id="id_edit">
        <label for="nome_edit">Nome:</label>
        <input type="text" name="nome" id="nome_edit"><br>
        <label for="email_edit">Email:</label>
        <input type="text" name="email" id="email_edit"><br>
        <input type="submit" value="Salvar">
        <button type="button" onclick="closeModal()">Cancelar</button>
    </form>
</div>


<?php
    //READ-----------------
    $sql = $pdo->prepare("SELECT * FROM tb_usuario");
    $sql->execute();
    $fetchUsuarios = $sql->fetchAll();
    foreach ($fetchUsuarios as $key => $value) {
        echo '<a href="?delete='.$value['id'].'" style="text-decoration:none; color:red;"><i class="fas fa-trash-alt"></i></a> ';
        echo $value['nome'].' | '.$value['email'].' ';
        echo '<a href="#" onclick="openModal('.$value['id'].', \''.$value['nome'].'\', \''.$value['email'].'\')">Editar</a>';
        echo '<hr>';
    }
    
?>
