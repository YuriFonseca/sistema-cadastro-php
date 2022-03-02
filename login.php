<?php
include('config.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = 'Select email, password from usuario where usuario = ''




?>