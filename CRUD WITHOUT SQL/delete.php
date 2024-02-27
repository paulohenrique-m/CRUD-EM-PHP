<?php
    //pega o id
    $index = $_GET['index'];
 
    //pesquisa no json
    $data = file_get_contents('usuarios.json');
    $data = json_decode($data);
    unset($data[$index]);
 
    //volta para o json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('usuarios.json', $data);
 
    header('location: index.php');
?>