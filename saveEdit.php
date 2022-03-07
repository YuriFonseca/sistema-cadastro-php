<?php 
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['name'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $numero = $_POST['number'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sqlUpdate = "UPDATE usuarios SET nome='$nome', endereco='$endereco', telefone='$telefone', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', cnpj='$cnpj', email='$email', password='$password' 
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: painel.php')

?>