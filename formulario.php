<?php

    if(isset($_POST['submit']))
    {

        /*
        print_r('Nome: ' . $_POST['name']);
        print_r('<br>');
        print_r('Endereco: ' . $_POST['endereco']);
        print_r('<br>');
        print_r('Numero: ' . $_POST['number']);
        print_r('<br>');
        print_r('Bairro: ' . $_POST['bairro']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('CEP: ' . $_POST['cep']);
        print_r('<br>');
        print_r('CNPJ: ' . $_POST['cnpj']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);*/

        include_once('config.php');    

        $nome = $_POST['name'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['number'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $status = TRUE;
        $data = date('Y/m/d');


        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,endereco,numero,bairro,cidade,estado,cep,cnpj,email,status,data) 
        VALUES('$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$cnpj','$email','$status','$data')");
    }
    echo  "<script>alert('Cadastro efetuado com sucesso!');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Inscreva-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="nome" class="inputUser" required>
                    <label for="nome" class="inputLabel">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="inputLabel">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="number" id="numero" class="inputUser" required>
                    <label for="numero" class="inputLabel">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="inputLabel">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="inputLabel">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="inputLabel">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="inputLabel">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cnpj" id="cnpj" class="inputUser" required>
                    <label for="cnpj" class="inputLabel">CNPJ</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="inputLabel">Email</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
        

</body>
</html>