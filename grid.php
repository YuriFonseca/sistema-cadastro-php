<?php
include('verifica.php');

    
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
        $telefone = $_POST['telefone'];
        $numero = $_POST['number'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $status = TRUE;
        $data = date('Y/m/d');
        
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,endereco,numero,bairro,cidade,estado,cep,cnpj,email,password,status,data,telefone) 
        VALUES('$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$cnpj','$email',md5('$password'),'$status','$data','$telefone')");
        echo  "<script>alert('Cadastro efetuado com sucesso!');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
     <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="stylelog.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-center">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="http://127.0.0.1/painel.php#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1/formulario.php#">Cadastro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
  <a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
  </li>
</ul>
</nav>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-off-set-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Usuários</h1>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>usuario/cadastro">Novo Usuario</a>
    </div>
    <div class="col-md-12">
        <table>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>status</th>
                <th>data</th>
                <th></th>
                <th></th>
            </tr>  
            <?php foreach($usuarios as $usu) { ?>
            <tr>
                <td><?= $usu[0]->email; ?></td>
                <td><?= $usu[0]->email; ?></td>
                <td><?= $usu[0]->email; ?></td>
                <td><?= $usu[0]->email; ?></td>
                <td><?= $usu[0]->email; ?></td>
                <td><?= $usu[0]->email; ?></td>
                <td><a href="" btn btn-primary>aqi</a></td>
                <td><a href="" btn btn-primary>aqi</a></td>

            </tr>
            <?php } ?>
        </table>
    </div>
</div>






</body>
</html>